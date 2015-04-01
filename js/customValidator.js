$.formUtils.addValidator({
    name : 'compare_email',
    validatorFunction : function(value) {
        if (value == $('#confirm_email').val())
            return true;
    },
    errorMessage : 'De ingevoerde e-mailadressen komen niet overeen',
    errorMessageKey: 'differentEmail'
});
