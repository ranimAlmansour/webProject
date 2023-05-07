var uyariMesaj="";
var Hata = false;

function validateForm()
{
    var ad = document.getElementById("fname").value;
    if (ad == "")
    {
        uyariMesaj += "   Adınızı Giriniz !";
        document.forms.BaneUlasin.fName.focus() ;
        Hata = true;
    }

    var soyad = document.getElementById("lastname").value;
    if( soyad== "")
    {
        uyariMesaj += "\n   Soyadınızı Giriniz !";
        document.forms.BaneUlasin.LastName.focus() ;
        Hata = true;
    }


    var mail = document.getElementById("email").value;
    if (!(mail.includes('@') && mail.includes('.') && mail.length > 5))
    {
        uyariMesaj += "\n   Email Adresinizi Doğru Formatta Giriniz !";
        document.forms.BaneUlasin.Email.focus() ;
        Hata = true;
    }
    
    var numara = document.getElementById("tel").value;
    if (!Number(numara) || numara == "" || numara.length != 10)
    {
        uyariMesaj += "\n   Telefon Numaranızı Konrtol Ediniz !";
        document.forms.BaneUlasin.Tel.focus() ;
        Hata = true;
    }

    var cinsiyet_ ;
    if(document.getElementById("er").checked == true)
    {
        cinsiyet_ = document.getElementById("er").value;
    }

    else if(document.getElementById("kd").checked == true)
    {
        cinsiyet_ = document.getElementById("kd").value;
    }

    else
    {
        uyariMesaj += "\n   Cisiyet Seçiniz !";
        document.getElementById("er").focus() ;
        Hata = true;
    }

    var adress = document.getElementById("adres").value;
    if (adress == "")
    {
        uyariMesaj += "\n   Adres Bilgilerinizi Giriniz !";
        document.forms.BaneUlasin.Adres.focus() ;
        Hata = true;
    }

    var gonderilenMesaj = document.getElementById("mesaj").value;
    if (gonderilenMesaj == "")
    {
        uyariMesaj += "\n   Mesajınızı Yazınız !";
        document.forms.BaneUlasin.Mesaj.focus() ;
        Hata = true;
    }

    var nationality = document.getElementsByName("Uyruk").value;

    var meslek_ = "";
    if(document.getElementById("meslek1").checked == true)
    {
        meslek_ += document.getElementById("meslek1").value;
    }

    if(document.getElementById("meslek2").checked == true)
    {
        meslek_ += document.getElementById("meslek2").value;
    }

    if(document.getElementById("meslek3").checked == true)
    {
        meslek_ += document.getElementById("meslek3").value;
    }

    if(document.getElementById("meslek4").checked == true)
    {
        meslek_ += document.getElementById("meslek4").value;
    }

    if(meslek_ == "")
    {
        uyariMesaj += "\n   meslek Seçiniz !";
        document.getElementById("meslek1").focus() ;
        Hata = true;
    }


    if(Hata)
    {
        alert(uyariMesaj);
        uyariMesaj = "";
        Hata = false;
        return false;
    }

        document.getElementById("ad1").innerHTML = ad
        document.getElementById("soyad1").innerHTML = soyad;
        document.getElementById("email1").innerHTML = mail;
        document.getElementById("tel1").innerHTML = numara;
        document.getElementById("cinsiyet1").innerHTML = cinsiyet_;
        document.getElementById("meslek1").innerHTML = meslek_;
        document.getElementById("cinsiyet1").innerHTML = cinsiyet_;
        document.getElementById("adres1").innerHTML = adress;
        document.getElementById("uyruk1").innerHTML = nationality;
        document.getElementById("mesaj1").innerHTML = gonderilenMesaj;

}
