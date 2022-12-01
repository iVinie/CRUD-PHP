let usuario = document.querySelector('#usuario')
let labelUsuario = document.querySelector('#labelUsuario')
let validUsuario = false

let cpf = document.querySelector('#campo_cpf')
let labelCpf = document.querySelector('#labelCpf')
let validCpf = false

let email = document.querySelector('#email')
let labelEmail = document.querySelector('#labelEmail')
let validEmail = false

let telefone = document.querySelector('#telefone')
let labelTelefone = document.querySelector('#labelTelefone')
let validTelefone = false

let salario = Number(document.querySelector('#salario'))
let labelSalario = document.querySelector('#labelSalario')
let validSalario = false


let msgError = document.querySelector('#erro')
let msgSuccess = document.querySelector('#acerto')


usuario.addEventListener('keyup', () => {
    if (usuario.value.length <= 10) {
        labelUsuario.setAttribute('style', 'color: red')
        labelUsuario.innerHTML = 'Insira seu Nome Completo com no minimo 10 caracteres'
        usuario.setAttribute('style', 'border-color: red')
        validUsuario = false
    } else if (usuario.value.length > 10) {
        labelUsuario.setAttribute('style', 'color: green')
        labelUsuario.innerHTML = 'Nome Completo*'
        usuario.setAttribute('style', 'border-color: green')
        validUsuario = true
    }
})


telefone.addEventListener('keyup', () => {
    if (telefone.value.length <= 10) {
        labelTelefone.setAttribute('style', 'color: red')
        labelTelefone.innerHTML = 'Escreva um Numero de telefone Válido xx9xxxxxxxx '
        telefone.setAttribute('style', 'border-color: red')
        validTelefone = false
    }
    else if (telefone.value.length >= 12) {
        labelTelefone.setAttribute('style', 'color: red')
        labelTelefone.innerHTML = 'Escreva um Numero de telefone Válido xx9xxxxxxxx '
        telefone.setAttribute('style', 'border-color: red')
        validTelefone = false
    }
    else {
        labelTelefone.setAttribute('style', 'color: green')
        labelTelefone.innerHTML = 'Numero Valido'
        telefone.setAttribute('style', 'border-color: green')
        validTelefone = true
    }
})

salario.addEventListener('keyup', () => {
    if (salario <= 1211) {
        labelSalario.setAttribute('style', 'color: red')
        labelSalario.innerHTML = 'Salário mínimo de R$ 1.212,00'
        salario.setAttribute('style', 'border-color: red')
        validSalario = false
    } else {
        labelSalario.setAttribute('style', 'color: green')
        labelSalario.innerHTML = 'Salário'
        salario.setAttribute('style', 'border-color: green')
        validSalario = true
    }
})



let value_cpf = document.querySelector('#campo_cpf');

value_cpf.addEventListener("keydown", function (e) {
    if (e.key > "a" && e.key < "z") {
        e.preventDefault();
    }
});
value_cpf.addEventListener("blur", function (e) {
    //Remove tudo o que não é dígito
    let validar_cpf = this.value.replace(/\D/g, "");

    // verificação da quantidade números
    if (validar_cpf.length == 11) {

        // verificação de CPF valido
        var Soma;
        var Resto;

        Soma = 0;
        for (i = 1; i <= 9; i++) Soma = Soma + parseInt(validar_cpf.substring(i - 1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11)) Resto = 0;
        if (Resto != parseInt(validar_cpf.substring(9, 10))) return alert("CPF Inválido!");;

        Soma = 0;
        for (i = 1; i <= 10; i++) Soma = Soma + parseInt(validar_cpf.substring(i - 1, i)) * (12 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11)) Resto = 0;
        if (Resto != parseInt(validar_cpf.substring(10, 11))) return alert("CPF Inválido!");;

        //formatação final
        cpf_final = validar_cpf.replace(/(\d{3})(\d)/, "$1.$2");
        cpf_final = cpf_final.replace(/(\d{3})(\d)/, "$1.$2");
        cpf_final = cpf_final.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
        document.getElementById('campo_cpf').value = cpf_final;
        labelCpf.setAttribute('style', 'color: Green')
        labelCpf.innerHTML = 'CPF Valido !'
        validCpf = true

    } else {
        labelCpf.setAttribute('style', 'color: red')
        labelCpf.innerHTML = 'CPF Invalido !'
        validCpf = false
    }

})



email.addEventListener('keyup', () => {
    if (email.value.length <= 4 || email.value.indexOf('@') == -1 || email.value.indexOf('.') == -1) {
        labelEmail.setAttribute('style', 'color: red')
        labelEmail.innerHTML = 'Email invalido!'
        email.setAttribute('style', 'border-color: red')
        validUsuario = false
    } else {
        labelEmail.setAttribute('style', 'color: green')
        labelEmail.innerHTML = 'Email Valido!'
        email.setAttribute('style', 'border-color: green')
        validEmail = true
    }
})