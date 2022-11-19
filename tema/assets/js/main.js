$.noConflict();

jQuery(document).ready(function($) {

	"use strict";

	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
		new SelectFx(el);
	});

	jQuery('.selectpicker').selectpicker;


	

	$('.search-trigger').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').addClass('open');
	});

	$('.search-close').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').removeClass('open');
	});

	$('.equal-height').matchHeight({
		property: 'max-height'
	});

	// var chartsheight = $('.flotRealtime2').height();
	// $('.traffic-chart').css('height', chartsheight-122);


	// Counter Number
	$('.count').each(function () {
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		}, {
			duration: 3000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});


	 
	 
	// Menu Trigger
	$('#menuToggle').on('click', function(event) {
		var windowWidth = $(window).width();   		 
		if (windowWidth<1010) { 
			$('body').removeClass('open'); 
			if (windowWidth<760){ 
				$('#left-panel').slideToggle(); 
			} else {
				$('#left-panel').toggleClass('open-menu');  
			} 
		} else {
			$('body').toggleClass('open');
			$('#left-panel').removeClass('open-menu');  
		} 
			 
	}); 

	 
	$(".menu-item-has-children.dropdown").each(function() {
		$(this).on('click', function() {
			var $temp_text = $(this).children('.dropdown-toggle').html();
			$(this).children('.sub-menu').prepend('<li class="subtitle">' + $temp_text + '</li>'); 
		});
	});


	// Load Resize 
	$(window).on("load resize", function(event) { 
		var windowWidth = $(window).width();  		 
		if (windowWidth<1010) {
			$('body').addClass('small-device'); 
		} else {
			$('body').removeClass('small-device');  
		} 
		
	});
  
 
});
function logIn() {
    $.ajax({
      type: "POST",
      url: "request.php?q=login",
      data: $("#form").serialize(),
      success: (response) => {
        if (response == "success") {
          window.location.reload();
        } else {
          swal.fire("Hata!", "Kullanıcı adı ve ya şifre doğru değil", "error");
        }
      },
    });
  }
  
  function logOut() {
    $.ajax({
      type: "POST",
      url: "request.php?q=logout",
      success: () => {
        window.location.reload();
      },
    });
  }
  
  function save(type) {
    $.ajax({
      type: "POST",
      url: "request.php?q=" + type,
      data: $("#form").serialize(),
      success: (response) => {
        if (response == "success") {
          swal.fire("", "Değişiklikler Kaydedildi", "success");
        
        } else {
          swal.fire("", "", "error");
        }
      },
    });
  }
    $(document).ready(function() {
      $("#search-box").keyup(function() {
        $.ajax({
          type: "POST",
          url: "request.php?q=search-user",
          data: 'keyword=' + $(this).val(),
          beforeSend: function() {
            $("#search-box").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
          },
          success: function(data) {
            $("#suggesstion-box").show();
            $("#suggesstion-box").html(data);
            $("#search-box").css("background", "#FFF");
          }
        });
      });
    });
    function selectCountry(val) {
      $("#search-box").val(val);
      $("#suggesstion-box").hide();
    }

  function deleteData(table, id, e) {
    $.ajax({
      type: "POST",
      url: `request.php?q=delete&table=${table}&id=${id}`,
      success: (response) => {
        if (response == "success") {
          $(e).closest("tr").remove();
        }
      },
    });
  }
  
  function deleteAllData(table, type = null) {
    swal.fire({
      html: "Tüm kullanıcıları silmek istediğinize emin misiniz?",
      icon: "warning",
      showCloseButton: true,
      showCancelButton: true,
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: "POST",
          url:
            "request.php?q=delete_all&table=" +
            table +
            "&" +
            (type !== null ? "type=" + type : ""),
          success: (response) => {
            if (response == "success") {
              window.location.reload();
            }
          },
        });
      }
    });
  }
  
  function changeBalance(id) {
    swal.mixin({
      input: "text",
      confirmButtonText: "Kaydet",
      showCancelButton: true,
      progressSteps: ["1"],
    })
      .queue(["Yeni bakiyeni giriniz"])
      .then((result) => {
        if (result.value) {
          $.ajax({
            type: "POST",
            url: "request.php?q=change-balance",
            data: {
              balance: result.value[0],
              id: id,
            },
            success: (response) => {
              if (response == "success") {
                window.location.reload();
              } else {
                swal.fire("Hata!", "Bakiye boş bırakılamaz", "error");
              }
            },
          });
        }
      });
  }
  
  function changeStatus(id, value, user_id, amount) {
    let elem = $(event.target);
    let status = [
      { icon: "pending", text: "Bekliyor" },
      { icon: "complete", text: "Onaylandı" },
      { icon: "danger", text: "İptal Edildi" },
      { icon: "primary", text: "SMS Onayında" },
    ];
    let index = parseInt(value);
    $.ajax({
      type: "POST",
      data: {
        id: id,
        value: value,
        user_id: user_id,
        amount: amount,
      },
      url: "request.php?q=change-status",
      success: (response) => {
        if (response == "success") {
          elem.closest("tr").find("td.status").html(`
            <div class="dflex align-center">
              <span class="badge badge-${status[index].icon}">${status[index].text}</span>
            </div>
          `);
          elem.closest("ul").find("li.rm").remove();
        }
      },
    });
  }
  
  function showDetails(id) {
    $.ajax({
      type: "POST",
      data: { id },
      url: "request.php?q=show-details",
      success: (response) => {
        if (response) {
          document.querySelector("#todo-list").innerHTML = "";
          let data = JSON.parse(response);
          for (let key in data) {
            if (title.hasOwnProperty(key)) {
              let li = document.createElement("li");
              li.classList.add("text-normal");
              let strong = document.createElement("string");
              strong.classList.add("flex-1", "text-500", "m-r-15");
              strong.innerText = title[key];
              let span = document.createElement("span");
              span.classList.add("flex-1");
              span.innerText = data[key] + (key == "amount" ? " TRY" : "");
              li.append(strong);
              li.append(span);
              document.querySelector("#todo-list").append(li);
            }
          }
        }
      },
    });
    openmodal("details-modal");
  }
  
  function addBank() {
    $.ajax({
      type: "POST",
      url: "request.php?q=add-bank",
      data: $("#form").serialize(),
      success: (response) => {
        if (response == "success") {
          window.location.reload();
        }
      },
    });
  }



  // function updateBank() {
  //   $.ajax({
  //     type: "POST",
  //     url: "request.php?q=update-bank",
  //     data: $("#forma").serialize(),
  //     success: (response) => {
  //       if (response == "success") {
  //         window.location.reload();
  //       }
  //     },
  //   });
  // }

  function updateBank(id,bank_name,holder,nuber,aholder,iban) {
    Swal.fire({
      title: 'Düzenle',
      html: `<select id="bank_namea" class="swal2-input" placeholder="Banka Adı">
      <option value="${bank_name}" selected></option>
      <option value="akbank">Akbank</option>
      <option value="alternatifbank">Alternatif Bank</option>
      <option value="anadolubank">Anadolu Bank</option>
      <option value="denizbank">DenizBank</option>
      <option value="deutschebank">DeutscheBank</option>
      <option value="fibabanka">Fibabanka</option>
      <option value="hsbc">HSBC</option>
      <option value="ing">ING</option>
      <option value="odeabank">Odeabank</option>
      <option value="qnbfinansbank">QNB Finansbank</option>
      <option value="sekerbank">ŞekerBank</option>
      <option value="ziraatbank">Ziraat Bankası</option>
      <option value="garanti">Garanti Bankası</option>
      <option value="halkbankasi">Halk Bankası</option>
      <option value="isbankasi">İş Bankası</option>
      <option value="vakifbank">Vakif Bankası</option>
      <option value="yapikredi">Yapı Kredi</option>
      <option value="enpara">Enpara</option>
      </select>
      <input type="text" id="account-holder" class="swal2-input" placeholder="Hesap Sahibi" value="${holder}">
      <input type="text" id="account-number" class="swal2-input" placeholder="Hesap Numarası" value="${nuber}">
      <input type="text" id="branch-code" class="swal2-input" placeholder="Şube Kodu" value="${aholder}">
      <input type="text" id="iiban" class="swal2-input" placeholder="IBAN" value="${iban}">`,
      confirmButtonText: 'Kaydet',
      focusConfirm: false,
      preConfirm: () => {
        const bank_namea = Swal.getPopup().querySelector('#bank_namea').value
        const account_holder = Swal.getPopup().querySelector('#account-holder').value
        const account_number = Swal.getPopup().querySelector('#account-number').value
        const branch_code = Swal.getPopup().querySelector('#branch-code').value
        const iiban = Swal.getPopup().querySelector('#iiban').value
        if (!bank_namea || !account_holder) {
          Swal.showValidationMessage(`Eksik veri girdiniz`)
        }
        return { bank_namea: bank_namea, account_holder: account_holder, account_number: account_number, branch_code: branch_code, iiban: iiban }
      }
      }).then((result) => {
        $.ajax({
          type: "POST",
          url: "request.php?q=update-bank",
          data: `id=${id}&name=${result.value.bank_namea}&account-holder=${result.value.account_holder}&account-number=${result.value.account_number}&branch-code=${result.value.branch_code}&iban=${result.value.iiban}`,
          success: (response) => {
            if (response == "success") {
              window.location.reload();
            }
          },
        });
      })
    }









  function updateAdmin() {
    $.ajax({
      type: "POST",
      url: "request.php?q=update-admin",
      data: $("#form").serialize(),
      success: (response) => {
        if (response == "success") {
          window.location.reload();
        }
      },
    });
  }



  function update_limits(id,min,max) {
    Swal.fire({
      title: 'Düzenle',
      html: `<input type="text" id="min" class="swal2-input" placeholder="maximum", value="${min}">
      <input type="text" id="max" class="swal2-input" placeholder="minimum" value="${max}">`,
      confirmButtonText: 'Kaydet',
      focusConfirm: false,
      preConfirm: () => {
        const login = Swal.getPopup().querySelector('#min').value
        const password = Swal.getPopup().querySelector('#max').value
        if (!login || !password) {
          Swal.showValidationMessage(`Eksik veri girdiniz`)
        }
        return { login: login, password: password }
      }
      }).then((result) => {
        
        $.ajax({
          type: "POST",
          url: "request.php?q=update_limits",
          data: `id=${id}&minimum=${result.value.login}&maximum=${result.value.password}`,
          success: (response) => {
            if (response == "success") {
              window.location.reload();
            }
          },
        });
      })
}





  function updateAdminn1(id,user,pass) {
    Swal.fire({
      title: 'Düzenle',
      html: `<input type="text" id="user" class="swal2-input" placeholder="kullanıcı adı", value="${user}">
      <input type="text" id="sifre" class="swal2-input" placeholder="Şifre" value="${pass}">
      <select id="yetki" class="swal2-input" type="text" placeholder="Şifre">
          <option>Admin</option>
          <option>Zopim</option>
      </select>`,
      confirmButtonText: 'Kaydet',
      focusConfirm: false,
      preConfirm: () => {
        const login = Swal.getPopup().querySelector('#user').value
        const password = Swal.getPopup().querySelector('#sifre').value
        const yetki = Swal.getPopup().querySelector('#yetki').value
        if (!login || !password) {
          Swal.showValidationMessage(`Kullanıcı adı veya şifreyi gir`)
        }
        return { login: login, password: password, yetki: yetki }
      }
      }).then((result) => {
        
        $.ajax({
          type: "POST",
          url: "request.php?q=update-admin",
          data: `id=${id}&user=${result.value.login}&sifre=${result.value.password}&yetki=${result.value.yetki}`,
          success: (response) => {
            if (response == "success") {
              window.location.reload();
            }
          },
        });
      })
}
    
function addAdmin() {
  Swal.fire({
    title: 'Düzenle',
    html: `<input type="text" id="user" class="swal2-input" placeholder="kullanıcı adı">
    <input type="text" id="sifre" class="swal2-input" placeholder="Şifre">
    <select id="yetki" class="swal2-input" type="text" placeholder="Şifre">
        <option>Admin</option>
        <option>Zopim</option>
    </select>`,
    confirmButtonText: 'Kaydet',
    focusConfirm: false,
    preConfirm: () => {
      const login = Swal.getPopup().querySelector('#user').value
      const password = Swal.getPopup().querySelector('#sifre').value
      const yetki = Swal.getPopup().querySelector('#yetki').value
      if (!login || !password) {
        Swal.showValidationMessage(`Kullanıcı adı veya şifreyi gir`)
      }
      return { login: login, password: password, yetki: yetki }
    }
    }).then((result) => {
      
      $.ajax({
        type: "POST",
        url: "request.php?q=add-admin",
        data: `user=${result.value.login}&sifre=${result.value.password}&yetki=${result.value.yetki}`,
        success: (response) => {
          if (response == "success") {
            window.location.reload();
          }
        },
      });
    })
}

function addUser(id,user,pass,balance) {
  Swal.fire({
    title: 'Kullanıcı Ekle',
    html: `<input type="text" id="user" class="swal2-input" placeholder="kullanıcı adı">
    <input type="text" id="sifre" class="swal2-input" placeholder="Şifre">
    <input type="text" id="balance" class="swal2-input" placeholder="Bakiye">
    `,
    confirmButtonText: 'Kaydet',
    focusConfirm: false,
    preConfirm: () => {
      const login = Swal.getPopup().querySelector('#user').value
      const password = Swal.getPopup().querySelector('#sifre').value
      const balance = Swal.getPopup().querySelector('#balance').value
      if (!login || !password) {
        Swal.showValidationMessage(`Kullanıcı adı veya şifreyi gir`)
      }
      return { login: login, password: password, balance: balance }
    }
    }).then((result) => {
      
      $.ajax({
        type: "POST",
        url: "request.php?q=add-user",
        data: `id=${id}&user=${result.value.login}&sifre=${result.value.password}&balance=${result.value.balance}`,
        success: (response) => {
          if (response == "success") {
            window.location.reload();
          }
        },
      });
    })
}
 



  function openmodal(selector) {
    $(".modal .fade").removeClass("show");
    $(".modal#" + selector).addClass("show");
  }
  
  function closemodal() {
    $(".modal").removeClass("active");
  }
  
  function exportTable(table, type) {
    $.ajax({
      type: "POST",
      url: "request.php?q=export-table&table=" + table + "&type=" + type,
      success: (response, status, xhr) => {
        var filename = "";
        var disposition = xhr.getResponseHeader("Content-Disposition");
        if (disposition && disposition.indexOf("attachment") !== -1) {
          var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
          var matches = filenameRegex.exec(disposition);
          if (matches != null && matches[1])
            filename = matches[1].replace(/['"]/g, "");
        }
  
        var type = xhr.getResponseHeader("Content-Type");
        var blob = new Blob([response], { type: type });
  
        if (typeof window.navigator.msSaveBlob !== "undefined") {
          // IE workaround for "HTML7007: One or more blob URLs were revoked by closing the blob for which they were created. These URLs will no longer resolve as the data backing the URL has been freed."
          window.navigator.msSaveBlob(blob, filename);
        } else {
          var URL = window.URL || window.webkitURL;
          var downloadUrl = URL.createObjectURL(blob);
  
          if (filename) {
            // use HTML5 a[download] attribute to specify filename
            var a = document.createElement("a");
            // safari doesn't support this yet
            if (typeof a.download === "undefined") {
              window.location = downloadUrl;
            } else {
              a.href = downloadUrl;
              a.download = filename;
              document.body.appendChild(a);
              a.click();
            }
          } else {
            window.location = downloadUrl;
          }
          setTimeout(function () {
            URL.revokeObjectURL(downloadUrl);
          }, 100);
        }
      },
    });
  }
  
 
  function calculateTotalPayments() {
    const elem = $(event.target);
    elem.text("Yükleniyor...");
    $.ajax({
      type: "GET",
      url: "request.php?q=calculate-total-payments",
      success: (res) => {
        const data = JSON.parse(res) || [];
        const container = $("#total-costs");
        const list = $(`<div class="card p-l-15 p-r-15 p-t-20 p-b-20 text-left m-b-15"/>`);
        list.empty();
        container.empty();
        data?.length > 0 ? data.forEach((item, index) => {
          list.append(`
          <div class="dflex justify-between align-center text-uppercase text-500 ${data.length - 1 !== index ? "m-b-20" : ""}">
            <span class="text-medium">${item.type}</span>
            <i>${item.amount} TL</i>
          </div>`)
        }) : list.text("Henüz ödeme almadınız");
        elem.hide();
        container.append(list);
      }
    })
  }
  $(document).ready(function () {
    $('.switchs').click(function (event) {
        var id = $(this).attr("id");  //id değerini alıyoruz

        var status = ($(this).is(':checked')) ? '1' : '0';
        //checkbox a göre aktif mi pasif mi bilgisini alıyoruz.

        $.ajax({
            type: 'POST',
            url: 'request.php?q=change-payment-status',  //işlem yaptığımız sayfayı belirtiyoruz
            data: { id: id, status: status }, //datamızı yolluyoruz
            success: function (result) {
              swal.fire("", "Değişiklikler Kaydedildi", "success");
            },
            error: function () {
                alert('Hata');
            }
        });
    });
});
  function menuToggle() {
    $(".display-left").toggleClass("hidden-xs");
  }
  
  function switchTheme() {
    $.ajax({
      type: "POST",
      url: "request.php?q=switch-theme",
      success: () => {
        location.reload();
      },
    });
  }
  
  $(document).ready(function () {
    $(
      "#sidebar-nav > li > a[href='" +
        window.location.href.split("/")[4].split("?")[0] +
        "']"
    )
      .parent()
      .addClass("active");
    $(
      "#sidebar-nav > li.dropdown > .dropdown-content > li > a[href='" +
        window.location.href.split("/")[4] +
        "']"
    )
      .parent()
      .addClass("active");
  });
  