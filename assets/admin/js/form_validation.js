/* ------------------------------------------------------------------------------
*
*  # Form validation
*
*  Specific JS code additions for form_validation.html page
*
*  Version: 1.3
*  Latest update: Feb 5, 2016
*
* ---------------------------------------------------------------------------- */

$(function() {

    // Setup validation
    // ------------------------------

    // Initialize
    var validator = $(".form-validate-jquery").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {
            password: {
                minlength: 5
            },
            repeat_password: {
                equalTo: "#password"
            },
            email: {
                email: true
            },
            repeat_email: {
                equalTo: "#email"
            },
            minimum_characters: {
                minlength: 10
            },
            maximum_characters: {
                maxlength: 10
            },
            minimum_number: {
                min: 10
            },
            maximum_number: {
                max: 10
            },
            number_range: {
                range: [10, 20]
            },
            url: {
                url: true
            },
            date: {
                date: true
            },
            date_iso: {
                dateISO: true
            },
            numbers: {
                number: true
            },
            digits: {
                digits: true
            },
            creditcard: {
                creditcard: true
            },
            basic_checkbox: {
                minlength: 2
            },
            styled_checkbox: {
                minlength: 2
            },
            switchery_group: {
                minlength: 2
            },
            switch_group: {
                minlength: 2
            }
        },
        messages: {
            custom: {
                required: "This is a custom error message",
            },
            agree: "Please accept our policy"
        }
    });


    // Reset form
    $('#reset').on('click', function() {
        validator.resetForm();
    });







    /*Admin Validations*/
    // Initialize
    var validator = $(".associate-validation").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            firstname: {
                required:true
            },
        
            email: {
                email: true
            },
        
            contact: {
                required:true,
                number: true,
                minlength:10,
                maxlength:10
            },
            address:{
                required:true
            },
            city:
            {
                required:true
            },
            pincode:{
                number:true
            },
            caption:
            {
                required:true
            },
            
            birth_date:{
                required:true
            }
          
        },
       
    });
    // Initialize
    var validator = $(".associate-profile-validation").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            firstname: {
                required:true
            },
        
            email: {
                email: true
            },
        
            mobile: {
                required:true,
                number: true,
                minlength:10,
                maxlength:10
            }
          
        },
       
    });

    /*Password*/
    // Initialize
    var validator = $(".ChangeAdminPassDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            old_password: {
                required:true
            },
        
            new_password: {
                required: true
            },
        
            confirm_password: {
                required:true,
                equalTo: "#new_password"
            }
          
        },
       
    });
    /*Password*/
    /*Admin Validations*/
    /*Blog Validations*/
    // Initialize
    var validator = $(".AddBlogDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            blog_name: {
                required:true
            },
            blog_description:{
                required:true
            }
          
        },
       
    });
    // Initialize
    var validator = $(".UpdateBlogDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            blog_name: {
                required:true
            },
            blog_description:{
                required:true
            }
          
        },
       
    });



    /*Trainer Blog*/
    // Initialize
    var validator = $(".TrainerAddBlogDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            blog_name: {
                required:true
            },
            blog_description:{
                required:true
            }
          
        },
       
    });
    // Initialize
    var validator = $(".TrainerUpdateBlogDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            blog_name: {
                required:true
            },
            blog_description:{
                required:true
            }
          
        },
       
    });
    /*Trainer Blog*/
    /*Blog Validations*/

    /*Diet Plan Validations*/
    // Initialize
    var validator = $(".AddDietPlanDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            diet_name: {
                required:true
            },
            diet_type:{
                required:true
            },
            diet_duration:{
                required:true,
                number: true
            },
            diet_ingredients:{
                required:true
            }
          
        },
       
    });
    // Initialize
    var validator = $(".UpdateDietPlanDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            diet_name: {
                required:true
            },
            diet_type:{
                required:true
            },
            diet_duration:{
                required:true,
                number: true
            },
            diet_ingredients:{
                required:true
            }
          
        },
       
    });


    // Initialize
    var validator = $(".AssignDietPlanDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            diet_details: {
                required:true
            },
            member_details:{
                required:true
            },
            member_weight:{
                required:true
            },
            dietStart_date:{
                required:true
            }
          
        },
       
    });
    // Initialize
    var validator = $(".UpdateAssignDietPlanDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            diet_details: {
                required:true
            },
            member_details:{
                required:true
            },
            member_weight:{
                required:true
            },
            dietStart_date:{
                required:true
            }
          
        },
       
    });

    /*Trainer Diet Plan*/
    // Initialize
    var validator = $("#TrainerAddDietPlanDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            diet_name: {
                required:true
            },
            diet_type:{
                required:true
            },
            diet_duration:{
                required:true,
                number: true
            },
            diet_ingredients:{
                required:true
            }
          
        },
       
    });
    // Initialize
    var validator = $("#TrainerUpdateDietPlanDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            diet_name: {
                required:true
            },
            diet_type:{
                required:true
            },
            diet_duration:{
                required:true,
                number: true
            },
            diet_ingredients:{
                required:true
            }
          
        },
       
    });


    // Initialize
    var validator = $("#TrainerAssignDietPlanDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            diet_details: {
                required:true
            },
            member_details:{
                required:true
            },
            member_weight:{
                required:true
            },
            dietStart_date:{
                required:true
            }
          
        },
       
    });
    // Initialize
    var validator = $("#TrainerUpdateAssignDietPlanDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            diet_details: {
                required:true
            },
            member_details:{
                required:true
            },
            member_weight:{
                required:true
            },
            dietStart_date:{
                required:true
            }
          
        },
       
    });
    /*Trainer Diet Plan*/
    /*Diet Plan Validations*/

    /*Equipment Validations*/
    // Initialize
    var validator = $(".AddEquipmentDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            equipment_name: {
                required:true
            },
            purchase_date:{
                required:true
            },
            agency_name:{
                required:true
            },
            agency_contact:{
                required:true,
                number: true,
                minlength:10,
                maxlength:10
            },
            purchase_price:{
                required:true,
                number:true
            }
        },
       
    });
    // Initialize
    var validator = $(".UpdateEquipmentDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            equipment_name: {
                required:true
            },
            purchase_date:{
                required:true
            },
            agency_name:{
                required:true
            },
            agency_contact:{
                required:true,
                number: true,
                minlength:10,
                maxlength:10
            },
            purchase_price:{
                required:true,
                number:true
            }
        },
       
    });
    /*Equipment Validations*/

    /*Event Validations*/
    // Initialize
    var validator = $(".AddEventDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            event_name: {
                required:true
            },
            event_location:{
                required:true
            },
            event_date:{
                required:true
            },
            event_time:{
                required:true
            },
            event_description:{
                required:true
            }
        },
       
    });
    // Initialize
    var validator = $(".UpdateEventDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            event_name: {
                required:true
            },
            event_location:{
                required:true
            },
            event_date:{
                required:true
            },
            event_time:{
                required:true
            },
            event_description:{
                required:true
            }
        },
       
    });
    /*Trainer Event*/
    // Initialize
    var validator = $("#TrainerAddEventDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            event_name: {
                required:true
            },
            event_location:{
                required:true
            },
            event_date:{
                required:true
            },
            event_time:{
                required:true
            },
            event_description:{
                required:true
            }
        },
       
    });
    // Initialize
    var validator = $("#TrainerUpdateEventDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            event_name: {
                required:true
            },
            event_location:{
                required:true
            },
            event_date:{
                required:true
            },
            event_time:{
                required:true
            },
            event_description:{
                required:true
            }
        },
       
    });
    /*Trainer Event*/
    /*Event Validations*/

    /*Daily Expenses Validations*/
    // Initialize
    var validator = $(".AddExpensesDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            name: {
                required:true
            },
            amount:{
                required:true,
                number:true
            }
        },
       
    });
    // Initialize
    var validator = $(".UpdateExpensesDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            name: {
                required:true
            },
            amount:{
                required:true,
                number:true
            }
        },
       
    });
    /*Daily Expenses Validations*/

    /*Login Validations*/
    // Initialize
    var validator = $("#login_form").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            username: {
                required:true
            },
            password:{
                required:true,
                number:true
            }
        },
       
    });
    /*Login Validations*/

    /*Trainer Salary Validations*/
    // Initialize
    var validator = $(".AddTrainerSalaryDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            month: {
                required:true
            },
            year:{
                required:true
            },
            trainer_name:{
                required:true
            },
            amount:{
                required:true,
                number:true
            }
        },
       
    });
    /*Trainer Salary Validations*/

    /*Member Validations*/
    // Initialize
    var validator = $(".AddMemberDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            member_name: {
                required:true
            },
            member_email:{
                required:true,
                email: true
            },
            member_mobile:{
                required:true,
                number:true,
                minlength:10,
                maxlength:10
            },
            member_dob:{
                required:true
            },
            member_address:{
                required:true
            },
            member_age:{
                required:true
            },
            member_height:{
                required:true
            },
            member_weight:{
                required:true
            },
            membership_plan:{
                required:true
            },
            trainer_name:{
                required:true
            },
            joining_date:{
                required:true
            }
        },
       
    });
    // Initialize
    var validator = $(".UpdateMemberDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            member_name: {
                required:true
            },
            member_email:{
                required:true,
                email: true
            },
            member_mobile:{
                required:true,
                number:true,
                minlength:10,
                maxlength:10
            },
            member_dob:{
                required:true
            },
            member_address:{
                required:true
            },
            member_age:{
                required:true
            },
            member_height:{
                required:true
            },
            member_weight:{
                required:true
            },
            membership_plan:{
                required:true
            },
            trainer_name:{
                required:true
            },
            joining_date:{
                required:true
            }
        },
       
    });

    /*Password*/
    // Initialize
    var validator = $(".ChangeMemberPassDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            old_password: {
                required:true
            },
        
            new_password: {
                required: true
            },
        
            confirm_password: {
                required:true,
                equalTo: "#new_password"
            }
          
        },
       
    });
    /*Password*/

    /*MemberPayment*/
    // Initialize
    var validator = $(".AddMemberPaymentDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            member_name: {
                required:true
            },
            membership_plan:{
                required:true
            },
            payment_type:{
                required:true
            },
            paid_amount:{
                required:true,
                number:true
            }
        },
       
    });
    /*MemberPayment*/
    /*Member Due Payment*/
    // Initialize
    var validator = $(".AddMemberDuePaymentDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            
            paid_amount:{
                required:true,
                number:true
            }
        },
       
    });
    /*Member Due Payment*/
    /*Membership Plan*/
    // Initialize
    var validator = $(".AddMembershipPlanDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            membership_plan: {
                required:true
            },
            plan_validity:{
                required:true
            },
            membership_duration:{
                required:true,
                number:true
            },
            membership_cost:{
                required:true,
                number:true
            },
            membership_discount:{
                required:true
            },
            membership_description:{
                required:true
            }
        },
       
    });
    // Initialize
    var validator = $(".UpdateMembershipPlanDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            membership_plan: {
                required:true
            },
            plan_validity:{
                required:true
            },
            membership_duration:{
                required:true,
                number:true
            },
            membership_cost:{
                required:true,
                number:true
            },
            membership_discount:{
                required:true
            },
            membership_description:{
                required:true
            }
        },
       
    });
    /*Membership Plan*/
    /*Member Validations*/
    /*Internal Message Validations*/
    // Initialize
    var validator = $("#AddMessageDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            receiver_id: {
                required:true
            },
            subject:{
                required:true
            },
            message:{
                required:true
            }
        },
       
    });
    /*Internal Message Validations*/

    /*Inventory Validations*/
    /*Product*/
    // Initialize
    var validator = $(".AddProductDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            product_name: {
                required:true
            },
            product_description:{
                required:true
            }
        },
       
    });
    // Initialize
    var validator = $(".UpdateProductDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            product_name: {
                required:true
            },
            product_description:{
                required:true
            }
        },
       
    });
    /*Product*/
    /*Product Stock*/
    // Initialize
    var validator = $(".AddProductStockDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            invoice_number: {
                required:true
            },
            product_id:{
                required:true
            },
            batch_number:{
                required:true
            },
            product_quantity:{
                required:true,
                number:true
            },
            product_mrp:{
                required:true,
                number:true
            }
        },
       
    });
    // Initialize
    var validator = $(".UpdateProductStockDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            invoice_number: {
                required:true
            },
            product_id:{
                required:true
            },
            batch_number:{
                required:true
            },
            product_quantity:{
                required:true,
                number:true
            },
            product_mrp:{
                required:true,
                number:true
            }
        },
       
    });
    /*Product Stock*/
    /*Purchase Order*/
    // Initialize
    var validator = $(".AddPurchaseDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            supplier_name: {
                required:true
            },
            supplier_contact:{
                required:true,
                number:true,
                minlength:10,
                maxlength:10
            },
            supplier_email:{
                required:true,
                email:true
            },
            supplier_address:{
                required:true
            },
            note:{
                required:true
            }
        },
       
    });
    /*Purchase Order*/
    /*Sales Order*/
    // Initialize
    var validator = $(".AddSalesDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            customer_name: {
                required:true
            },
            customer_contact:{
                required:true,
                number:true,
                minlength:10,
                maxlength:10
            },
            customer_email:{
                required:true,
                email:true
            },
            customer_address:{
                required:true
            },
            tax:{
                required:true,
                number:true
            },
            discount:{
                required:true,
                number:true
            },
            note:{
                required:true
            }
        },
       
    });
    /*Sales Order*/
    /*Inventory Validations*/
    /*Trainer Validations*/
    // Initialize
    var validator = $(".AddTrainerDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            trainer_name: {
                required:true
            },
            trainer_email:{
                required:true,
                email: true
            },
            trainer_mobile:{
                required:true,
                number:true,
                minlength:10,
                maxlength:10
            },
            trainer_dob:{
                required:true
            },
            trainer_address:{
                required:true
            },
            trainer_age:{
                required:true
            },
            city:{
                required:true
            },
            pincode:{
                required:true
            },
            trainer_doj:{
                required:true
            },
            trainer_salary:{
                required:true,
                number:true
            }
        },
       
    });
    // Initialize
    var validator = $(".UpdateTrainerDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            trainer_name: {
                required:true
            },
            trainer_email:{
                required:true,
                email: true
            },
            trainer_mobile:{
                required:true,
                number:true,
                minlength:10,
                maxlength:10
            },
            trainer_dob:{
                required:true
            },
            trainer_address:{
                required:true
            },
            trainer_age:{
                required:true
            },
            city:{
                required:true
            },
            pincode:{
                required:true
            },
            trainer_doj:{
                required:true
            },
            trainer_salary:{
                required:true,
                number:true
            }
        },
       
    });
    /*Password*/
    // Initialize
    var validator = $(".ChangeTrainerPassDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            old_password: {
                required:true
            },
        
            new_password: {
                required: true
            },
        
            confirm_password: {
                required:true,
                equalTo: "#new_password"
            }
          
        },
       
    });
    /*Password*/
    /*Trainer Validations*/
    /*Workout Validations*/
    // Initialize
    var validator = $(".AddWorkoutDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            workout_name: {
                required:true
            },
            workout_duration:{
                required:true,
                number: true
            },
            workout_description:{
                required:true
            }
        },
       
    });
    // Initialize
    var validator = $(".UpdateWorkoutDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            workout_name: {
                required:true
            },
            workout_duration:{
                required:true,
                number: true
            },
            workout_description:{
                required:true
            }
        },
       
    });
    /*Assign Workout*/
    // Initialize
    var validator = $(".AssignWorkoutDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            workout_id: {
                required:true
            },
            member_id:{
                required:true
            },
            workoutstart_date:{
                required:true
            },
            member_weight:{
                required:true
            }
        },
       
    });
    // Initialize
    var validator = $(".UpdateAssignedWorkoutDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            workout_id: {
                required:true
            },
            member_id:{
                required:true
            },
            workoutstart_date:{
                required:true
            },
            member_weight:{
                required:true
            }
        },
       
    });
    /*Assign Workout*/


    /*Trainer Workout*/
    // Initialize
    var validator = $("#TrainerAddWorkoutDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            workout_name: {
                required:true
            },
            workout_duration:{
                required:true,
                number: true
            },
            workout_description:{
                required:true
            }
        },
       
    });
    // Initialize
    var validator = $("#TrainerUpdateWorkoutDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            workout_name: {
                required:true
            },
            workout_duration:{
                required:true,
                number: true
            },
            workout_description:{
                required:true
            }
        },
       
    });
    /*Assign Workout*/
    // Initialize
    var validator = $("#TrainerAssignWorkoutDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            workout_id: {
                required:true
            },
            member_id:{
                required:true
            },
            workoutstart_date:{
                required:true
            },
            member_weight:{
                required:true
            }
        },
       
    });
    // Initialize
    var validator = $("#TrainerUpdateAssignedWorkoutDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            workout_id: {
                required:true
            },
            member_id:{
                required:true
            },
            workoutstart_date:{
                required:true
            },
            member_weight:{
                required:true
            }
        },
       
    });
    /*Assign Workout*/
    /*Trainer Workout*/
    /*Workout Validations*/
    /*Attendance Validations*/
    // Initialize
    var validator = $(".AddMemberAttendance").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            member_id: {
                required:true
            }
        },
       
    });
    // Initialize
    var validator = $(".AddTrainerAttendance").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            trainer_id: {
                required:true
            }
        },
       
    });
    /*Attendance Validations*/
    /*Enquiry Validations*/
    // Initialize
    var validator = $("#AddEnquiryDetails").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },


        validClass: "validation-valid-label",
        success: function(label) {
            label.addClass("validation-valid-label").text("Success.")
        },
        rules: {

            name: {
                required:true
            },
        
            email: {
                email: true
            },
        
            mobile: {
                required:true,
                number: true,
                minlength:10,
                maxlength:10
            },
            enquiry_details:{
                required:true
            }
          
        },
       
    });
    /*Enquiry Validations*/
});
