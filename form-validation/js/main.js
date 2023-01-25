$(document).ready(function() {
    $("#btn").click(function() {
        let info = $(".response-error")
        let name = $("#name").val();
        let last_name = $("#last_name").val();
        let gender = $("#gender").val();
        let adress= $("#adress").val();
        let city = $("#city").val();
        

        if(name.length < 3){
            info.html('Ime mora imati najmanje 3 karaktera!');
            return false;
        }else
            info.html('');

        if(last_name.length < 3) {
            info.html('Prezime mora imati najmanje 3 karaktera!');
            return false;
        }else
            info.html('');

        if(gender == 0) {
            info.html('Niste izabrali pol!');
            return false;
        }else
            info.html('');

        if(!$("#date").val()){
            info.html('Unesite datum rodjenja!');
            return false;
        }else
            info.html('');

        let now = new Date();
        date = new Date($("#date").val());
        //console.log(now.getFullYear() - date.getFullYear());

        if(now.getFullYear() - date.getFullYear() < 11) {
            info.html('Morate imate najmanje 12 godina da biste se registrovali!')
            return false;
        }else
            info.html('');

        if(adress.length < 5){
            info.html('Adresa mora sadrzati najmanje 5 karaktera!');
            return false;
        }else
            info.html('');
            
        if(city.length < 3){
            info.html('Grad mora sadrzati najmanje 3 karaktera!');
            return false;
        }else
            info.html('');

        if(!$('#cbox').is(":checked")){
            info.html('<b>Niste se složili sa uslovima korišćenja!</b>');
            return false;
        }else
            info.html('');

        $.post('ajaxPhp/ajax.php?request=registration', {name:name, last_name:last_name, gender:gender, adress:adress, city:city, date:date}, function(response) {
            if(response.trim() == "1"){
                window.location.assign('welcome.php');
            }else
                alert(response);
        })
    })
})