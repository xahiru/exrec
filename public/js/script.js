// Proberen om te togglen zonder jquery
function toggleNav() {

    if (document.getElementById("header-box").classList.contains('hide-on-small')) {
        document.getElementById("header-box").classList.remove('hide-on-small');
        document.getElementById("header-box").classList.add('open');
    }
    else {
        document.getElementById("header-box").classList.remove('open');
        document.getElementById("header-box").classList.add('hide-on-small');
    }
}

function validateForm() {
    var name = document.getElementById("nickname").value;
    if (name == null || name == "") {
        document.getElementById("nickname").classList.add('error');
        document.getElementById("nickname-error").classList.remove('hidden');
        return false;
    }
}

function enteringNickname() {
    document.getElementById("nickname").classList.remove('error');
    document.getElementById("nickname-error").classList.add('hidden');
}

function enableButon() {
    document.getElementById("continue-onward").classList.remove('disabled');
    document.getElementById("continue-onward").classList.add('red-primary');
    document.getElementById("continue-onward").disabled = false;
}

function wereDone() {
    document.getElementById("loading").classList.add('hidden');
    document.getElementById("done").classList.remove('hidden');
    enableButon();
}

function submitLink(waarde){
    document.getElementById("hiddenValue").value = waarde;
    javascript:document.forms['pageForm'].submit();
}