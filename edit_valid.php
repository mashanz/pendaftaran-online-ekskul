<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>SISTEM PENDAFTARAN ONLINE SCC</title>
<link rel="stylesheet" href="css/milk.css">
<link rel="stylesheet" href="jquery/css/dark-hive/jquery-ui-1.10.3.custom.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.tools.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="jquery/js/jquery-ui-1.10.3.custom.js"></script>
<style>
  .custom-combobox {
    position: relative;
    display: inline-block;
  }
  .custom-combobox-toggle {
    position: absolute;
    top: 0;
    bottom: 0;
    margin-left: -15px;
    padding: 0;
    /* support: IE7 */
    *height: 1.7em;
    *top: 0.1em;
  }
  .custom-combobox-input {
	font-size:12px;
    width:100px;
	height:25px;
    margin: 0;
    padding: 0.3em;
  }
  </style>
  <script>
  (function( $ ) {
    $.widget( "custom.combobox", {
      _create: function() {
        this.wrapper = $( "<span>" )
          .addClass( "custom-combobox" )
          .insertAfter( this.element );
 
        this.element.hide();
        this._createAutocomplete();
        this._createShowAllButton();
      },
 
      _createAutocomplete: function() {
        var selected = this.element.children( ":selected" ),
          value = selected.val() ? selected.text() : "";
 
        this.input = $( "<input>" )
          .appendTo( this.wrapper )
          .val( value )
          .attr( "title", "" )
          .addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
          .autocomplete({
            delay: 0,
            minLength: 0,
            source: $.proxy( this, "_source" )
          })
          .tooltip({
            tooltipClass: "ui-state-highlight"
          });
 
        this._on( this.input, {
          autocompleteselect: function( event, ui ) {
            ui.item.option.selected = true;
            this._trigger( "select", event, {
              item: ui.item.option
            });
          },
 
          autocompletechange: "_removeIfInvalid"
        });
      },
 
      _createShowAllButton: function() {
        var input = this.input,
          wasOpen = false;
 
        $( "<a>" )
          .attr( "tabIndex", -1 )
          .attr( "title", "Tampilkan" )
          .tooltip()
          .appendTo( this.wrapper )
          .button({
            icons: {
              primary: "ui-icon-triangle-1-s"
            },
            text: false
          })
          .removeClass( "ui-corner-all" )
          .addClass( "custom-combobox-toggle ui-corner-right" )
          .mousedown(function() {
            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
          })
          .click(function() {
            input.focus();
 
            // Close if already visible
            if ( wasOpen ) {
              return;
            }
 
            // Pass empty string as value to search for, displaying all results
            input.autocomplete( "search", "" );
          });
      },
 
      _source: function( request, response ) {
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
        response( this.element.children( "option" ).map(function() {
          var text = $( this ).text();
          if ( this.value && ( !request.term || matcher.test(text) ) )
            return {
              label: text,
              value: text,
              option: this
            };
        }) );
      },
 
      _removeIfInvalid: function( event, ui ) {
 
        // Selected an item, nothing to do
        if ( ui.item ) {
          return;
        }
 
        // Search for a match (case-insensitive)
        var value = this.input.val(),
          valueLowerCase = value.toLowerCase(),
          valid = false;
        this.element.children( "option" ).each(function() {
          if ( $( this ).text().toLowerCase() === valueLowerCase ) {
            this.selected = valid = true;
            return false;
          }
        });
 
        // Found a match, nothing to do
        if ( valid ) {
          return;
        }
 
        // Remove invalid value
        this.input
          .val( "" )
          .attr( "title", value + " didn't match any item" )
          .tooltip( "open" );
        this.element.val( "" );
        this._delay(function() {
          this.input.tooltip( "close" ).attr( "title", "" );
        }, 2500 );
        this.input.data( "ui-autocomplete" ).term = "";
      },
 
      _destroy: function() {
        this.wrapper.remove();
        this.element.show();
      }
    });
  })( jQuery );
 
  $(function() {
    $( "#kelamin" ).combobox();
    $( "#toggle" ).click(function() {
      $( "#kelamin" ).toggle();
    });
  });
  </script>
<script>
  $(function() {
    $( "#tgllahir" ).datepicker({
	  minDate: "-50Y",
	  maxDate: "+1M +10D",
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
<script>
  $(function() {
    $( document ).tooltip({
      position: {
        my: "left+20 bottom-10",
        at: "center+61 top",
        using: function( position, feedback ) {
          $( this ).css( position );
          $( "<div>" )
            .addClass( "arrow" )
            .addClass( feedback.vertical )
            .addClass( feedback.horizontal )
            .appendTo( this );
        }
      }
    });
  });
  </script>
  <style>
  .ui-tooltip, .arrow:after {
    background: black;
    border: 2px solid white;
  }
  .ui-tooltip {
    padding: 10px 20px;
    color: white;
    border-radius: 20px;
    font: bold 14px "Helvetica Neue", Sans-Serif;
    text-transform: uppercase;
    box-shadow: 0 0 7px black;
  }
  .arrow {
    width: 70px;
    height: 16px;
    overflow: hidden;
    position: absolute;
    left: 50%;
    margin-left: -35px;
    bottom: -16px;
  }
  .arrow.top {
    top: -16px;
    bottom: auto;
  }
  .arrow.left {
    left: 20%;
  }
  .arrow:after {
    content: "";
    position: absolute;
    left: 20px;
    top: -20px;
    width: 25px;
    height: 25px;
    box-shadow: 6px 5px 9px -9px black;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    tranform: rotate(45deg);
  }
  .arrow.top:after {
    bottom: -20px;
    top: auto;
  }
  </style>
<script>
  $(function() {
    $( "#tgllahir" ).datepicker();
    });
  });
</script>
<script>
$(document).ready(function() { // validate signup form on keyup and submit
///////////////////////////////////////////////////////////////////////////////////////////
	var validator = $("#signupform").validate({ // validasi aktif pada form id=signupform
		rules: {
		//input name yang akan di validasi//
			username: {
				required: true,
				minlength: 6
			},
			password: {
				required: true,
				minlength: 5
			},
			password_confirm: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			namane: {
				required: true,
				minlength: 3
			},
			kelamin: {
				required: true
			},
			tlahir: {
				required: true
			},
			tgllahir: {
				required: true
			},
			alamat: {
				required: true
			}
		},
		//pesan bila ada error//
		messages: {
			username: " ",
			password: " ",
			password_confirm: " ",
			namane: " ",
			kelamin: " ",
			tlahir: " ",
			tgllahir: " ",
			alamat: " "
		},
///////////////////////////////////////////////////////////////////////////////////////////
// the errorPlacement has to take the table layout into account
		errorPlacement: function(error, element) {
			if ( element.is(":radio") )
				error.appendTo( element.parent().next().next() );
			else if ( element.is(":checkbox") )
				error.appendTo ( element.next() );
			else
				error.appendTo( element.parent().next() );
		},
		success: function(label) { // set this class to error-labels to indicate valid fields
			label.html("&nbsp;").addClass("checked"); // set &nbsp; as text for IE
		},
		highlight: function(element, errorClass) {
			$(element).parent().next().find("." + errorClass).removeClass("checked");
		}
///////////////////////////////////////////////////////////////////////////////////////////
	});
});
</script>
</head>

<body>
	<form id="signupform" autocomplete="on" method="post" action="daftar.php" novalidate="novalidate">
	<table id="form_isi">
		<tr>
			<td colspan="3" id="cat">Anggota Baru</td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input id="username" title="Nama yang akan di gunakan saat login server scc. Min. 6 karakter (contoh: paijo123)" name="username" type="text" maxlength="100"></td>
			<td></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input id="password" title="Password yang akan digunakan. Min. 5 Karakter" name="password" type="password" maxlength="100"></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td><input title="Ketik ulang password-nya untuk konfirmasi password sebelumnya" name="password_confirm" id="password_confirm" type="password" maxlength="100"></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="3" id="cat">Identitas</td>
		</tr>		
		<tr>
			<td>Nama Lengkap</td>
			<td><input id="namane" title="Masukan nama lengkapmu. Karena jika kita tak kenal maka tak sayang (contoh: Paijo Van Java)" name="namane" type="text" maxlength="100"></td>
			<td></td>
		</tr>
	<tr>
		<td>Gender</td>
		<td>
			<select title="" name="kelamin" id="kelamin" type="text">
				<option></option>
				<option>Laki-laki</option>
				<option>Perempuan</option>
			</select>
		</td>
		<td></td>
	</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td><input id="tlahir" title="Dimana daerah tempat kamu lahir?(contoh: pandeglang)" name="tlahir" type="text" maxlength="100"></td>
			<td></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input id="tgllahir" title="Tanggal berapa kamu lahir?" name="tgllahir" type="text" value="00/00/000" maxlength="100"></td>
			<td></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input id="alamat" title="Kamu sekarang tinggal dimana? (contoh: cigadung)" name="alamat" type="text" maxlength="100"></td>
			<td></td>
		</tr>		
		<tr>
			<td colspan="3" id="cat">Informasi Tambahan</td>
		</tr>
			<tr>
			<td>No. Telepon</td>
			<td><input title="Isi ya biar kita bisa SMS'an sama telponan." name="telp" id="telp" type="text"></td>
			<td></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input title="kirim kiriman email yuks. ol selalu biar update" name="mail" id="mail" type="mail"></td>
			<td></td>
		</tr>
	<tr>
		<td>Facebook</td>
		<td><input title="Yuk gabung di Group Sambadha Computer Club." name="fb" id="fb" type="text"></td>
		<td></td>
	</tr>
	<tr>
		<td>Twitter</td>
		<td><input title="Follow twitternya yaaa,.. biar bisa mentionan" name="twitter" id="twitter" type="text"></td>
		<td></td>
	</tr>
	<tr>
		<td>Hobi</td>
		<td><input title="Apa hoby kamu yang paling kamu suka?" name="hobi" id="hobi" type="text"></td>
		<td></td>
		</tr>
		<tr>
			<td>Alasan Masuk SCC</td>
			<td><textarea title="Kenapa kamu tertarik mengikuti ekskul Sambadha Computer Club?" name="alasan" id="tarea"></textarea></td>
			<td></td>
		</tr>
	</table>
	<div align="center">
	<a href="masuk.php"><input id="buttonback" type="button" name="submit" value="Kembali"></a>
	<input id="signupsubmit" type="submit" name="submit" value="Daftar">
	</div>
	</form>
	
</body>
</html>