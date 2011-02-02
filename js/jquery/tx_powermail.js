	/*
	* Really easy, unobtrusive tabs with jQuery
	* based on the script taken from: http://jqueryfordesigners.com/jquery-tabs/
	*/	

$(function () {
			var tabContainers = $('fieldset');
			tabContainers.hide().filter(':first').show();
			
			$('ul#tabs.powermail_multiplejs_tabs li.powermail_multiplejs_tabs_item a').click(function () {
				tabContainers.hide();
				tabContainers.filter(this.hash).show();
				$('ul#tabs.powermail_multiplejs_tabs li.powermail_multiplejs_tabs_item a').removeClass('selected');
				$(this).addClass('selected');
				return false;
			}).filter(':first').click();
		});


/*
* Really easy field validation with jQuery
* based on the script taken from: http://tetlaw.id.au/view/javascript/really-easy-field-validation
*/	

(function($){
	
////////////////////////////////////////////////////////////////////////////////////////////////////////
var IsEmpty	= function(v){
	return  ((v == null) || (v.length == 0)); // || /^\s+$/.test(v));
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
var Class	= {};
Class.create	= function(){
	return function(){ this.initialize && this.initialize.apply(this, arguments); }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////
window.Validator = Class.create();
var ValidatorMethods = {
	pattern : function(v,elem,opt) {return IsEmpty(v) || opt.test(v)},
	minLength : function(v,elem,opt) {return v.length >= opt},
	maxLength : function(v,elem,opt) {return v.length <= opt},
	min : function(v,elem,opt) {return v >= parseFloat(opt)},
	max : function(v,elem,opt) {return v <= parseFloat(opt)},
	notOneOf : function(v,elem,opt) {
		return $.inArray(v, opt) == -1;
	},
	oneOf : function(v,elem,opt) {
		return $.inArray(v, opt) != -1;
	},
	is : function(v,elem,opt) {return v == opt},
	isNot : function(v,elem,opt) {return v != opt},
	equalToField : function(v,elem,opt) {return v == $(opt).val()},
	notEqualToField : function(v,elem,opt) {return v != $(opt).val()}
}
////////////////////////////////////////////////////////////////////////////////////////////////////////
var isObject = function(o){
	return o && o.constructor && o.constructor == Object;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////
window.Validation = Class.create();
$.extend(window.Validation, {
	add: function(className, error, fn, options) {
		// some swap operationas
		if(isObject(fn)){
			options	= fn;
			fn	= function(){return true;}
		}

		if(isObject(options)){
			var extra	= [];
			$.each(options, function(prop, value){
				if($.isFunction(ValidatorMethods[prop])){
					extra.push({
						fn:	ValidatorMethods[prop],
						value:	value
					});
				}
			});
		}

		var item	= {
			error:	error,
			fn:	fn,
			extra:	extra
		}
		Validation.methods[className]	= item;
	},
	addAllThese: function(validators) {
		$.each(validators, function(index, value) {
			Validation.add(value[0], value[1], value[2], value[3]);
		});
	},
	methods: {}
})

Validation.prototype = {
	initialize : function(form, options){
		var self	= this;
		options		= self.options	= $.extend({
			onSubmit : true,
			stopOnFirst : false,
			immediate : false,
			focusOnError : true,
			useTitles : false,
			onFormValidate : null,
			onElementValidate : null
		}, options || {});

		self.form = $('#'+form);

		if(options.onSubmit) {
			self.form.bind('submit', function(){
				return self.validate();
			});
		}

		if(options.immediate) {
			this.getElements().bind("blur", function(event){
				Validation.validate(this, self.options)
			});
		}
	},
	getElements: function(){
		return this.form.find("input,select,textarea");
	},
	validate: function(){
		var self	= this;
		var result	= 1;
		this.getElements().each(function(){
			var res = Validation.validate(this, self.options);
			result	&= res
			!res && self.options.focusOnError && this.focus();
			if(!result && self.options.stopOnFirst) {
				return false;
			}
		});
		result	= !!result;
		this.options.onFormValidate && this.options.onFormValidate(result, this.form[0]);
		return result;
	}
}

var getAdvice		= function(elem){
	var div	= '<div class="powermail_mandatory_js" style="display:none"></div>'
	if(elem.is("*:radio,*:checkbox")){
		var target	= elem.parent().parent()
		var adv	= target.find(".powermail_mandatory_js").remove();
		adv	= target.append(div).find("*:last");
	} else {
		var adv	= elem.next();
		if(!adv.is(".powermail_mandatory_js")){
			adv	= elem.after(div).next();
		}
	}
	return adv;
}

Validation.reset	= function(elem){
	getAdvice(elem).hide();
	elem.removeClass("validation-failed");
	elem.removeClass("validation-passed");
}

Validation.validate	= function(elem, options){
	elem	= $(elem);
	options	= options || {};

	if(!elem.is("*:visible") || elem.is("*:hidden")){
		this.reset(elem);
		return true;
	}

	var cls		= elem.attr("class").split(/\s+/);
	var result	= 1;
	var value	= elem.val();

	$.each(cls, function(index, grep){
		var checker	= Validation.methods[grep];
		if(!checker) return;

		result	&= checker.fn(value, elem);

		// additional check functions executed here
		if(checker.extra){
			$.each(checker.extra, function(index, extra){
				result	&= extra.fn(value, elem, extra.value);
			});
		}

		if(!result){
			var errorMsg = (options.useTitle || options.useTitles)? (elem.attr("title") ? elem.attr("title") : checker.error) : checker.error;
			elem.removeClass("validation-passed").addClass("validation-failed");
			getAdvice(elem).html(errorMsg).fadeIn(1000);
			return false;
		}
	});
	if(result){
		getAdvice(elem).hide();
		elem.addClass("validation-passed").removeClass("validation-failed");
	}
	result	= !!result;
	options.onElementValidate && options.onElementValidate(result, elem[0]);
	return result;
}

Validation.addAllThese([
	// (not blank)
	['required', '<!-- ###REQUIRED### -->This is a required field<!-- ###REQUIRED### -->', function(v) {
		return !IsEmpty(v);
	}],

	// (a valid number)
	['validate-number', '<!-- ###VALIDATE_REQUIRED### -->Please enter a valid number in this field<!-- ###VALIDATE_REQUIRED### -->', function(v) {
		return IsEmpty(v) || (!isNaN(v) && !/^\s+$/.test(v));
	}],

	// (digits only)
	['validate-digits', '<!-- ###VALIDATE_DIGITS### -->Please use numbers only in this field. please avoid spaces or other characters such as dots or commas<!-- ###VALIDATE_DIGITS### -->', function(v) {
		return IsEmpty(v) || !/[^\d]/.test(v);
	}],

	// (letters only)
	['validate-alpha', '<!-- ###VALIDATE_ALPHA### -->Please use letters only (a-z) in this field<!-- ###VALIDATE_ALPHA### -->', function (v) {
		return IsEmpty(v) || /^[\sa-z\u00C0-\u00FF-]+$/i.test(v);
	}],

	// (only letters and numbers)
	['validate-alphanum', '<!-- ###VALIDATE_ALPHANUM### -->Please use only letters (a-z) or numbers (0-9) only in this field. No spaces or other characters are allowed<!-- ###VALIDATE_ALPHANUM### -->', function(v) {
		return IsEmpty(v) || /^[\sa-z0-9\u00C0-\u00FF-]+$/i.test(v);
	}],

	//(a valid date value)
	['validate-date', '<!-- ###VALIDATE_DATE### -->Please enter a valid date<!-- ###VALIDATE_DATE### -->', function(v) {
		var test = new Date(v);
		return IsEmpty(v) || !isNaN(test);
	}],

	// (a valid email address)
	['validate-email', '<!-- ###VALIDATE_EMAIL### -->Please enter a valid email address (test@test.com)<!-- ###VALIDATE_EMAIL### -->', function (v) {
		return IsEmpty(v) || /\w{1,}[@][\w\-]{1,}([.]([\w\-]{1,})){1,3}$/.test(v);
	}],

	// (a valid URL)
	['validate-url', '<!-- ###VALIDATE_URL### -->Please enter a valid URL (http://www.test.com)<!-- ###VALIDATE_URL### -->', function (v) {
		return IsEmpty(v) || /^(http|https|ftp):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(:(\d+))?\/?/i.test(v);
	}],

	// (a date formatted as; dd/mm/yyyy)
	['validate-date-au', '<!-- ###VALIDATE_DATE_AU### -->Please use this date format: dd/mm/yyyy. For example 17/03/2006 for the 17th of March, 2006<!-- ###VALIDATE_DATE_AU### -->', function(v) {
		if(IsEmpty(v)) return true;

		var regex = /^(\d{2})\/(\d{2})\/(\d{4})$/;
		if(!regex.test(v)) return false;

		var d = new Date(v.replace(regex, '$2/$1/$3'));
		return ( parseInt(RegExp.$2, 10) == (1+d.getMonth()) ) &&
			(parseInt(RegExp.$1, 10) == d.getDate()) &&
			(parseInt(RegExp.$3, 10) == d.getFullYear() );
	}],

	// (a valid dollar value)
	['validate-currency-dollar', '<!-- ###VALIDATE_CURRENCY_DOLLAR### -->Please enter a valid $ amount. For example $100.00<!-- ###VALIDATE_CURRENCY_DOLLAR### -->', function(v) {
		// [$]1[##][,###]+[.##]
		// [$]1###+[.##]
		// [$]0.##
		// [$].##
		return IsEmpty(v) || /^\$?\-?([1-9]{1}[0-9]{0,2}(\,[0-9]{3})*(\.[0-9]{0,2})?|[1-9]{1}\d*(\.[0-9]{0,2})?|0(\.[0-9]{0,2})?|(\.[0-9]{1,2})?)$/.test(v);
	}],

	// (first option e.g. 'Select one...' is not selected option)
	['validate-selection', '<!-- ###VALIDATE_SELECTION### -->Please make a selection<!-- ###VALIDATE_SELECTION### -->', function(v,elem){
		return elem.options ? elem.selectedIndex > 0 : !IsEmpty(v);
	}],

	// (At least one textbox/radio element must be selected in a group - see below*)
	['validate-one-required', '<!-- ###VALIDATE_ONE_REQUIRED### -->Please select one of the above options<!-- ###VALIDATE_ONE_REQUIRED### -->', function (v, elem) {
		// enable parent DIV with parent DIV - Powermail Fix #2263
		return !!elem.parent().parent().find('INPUT:radio:checked,INPUT:checkbox:checked').size();
	}]
]);

jQuery.fn.validate	= function(options){
	return this.each(function(){
		var elem	= $(this);
		if(elem.is("form")){
			new Validation(this, options);
		} else if(elem.is("input,select,textarea")){
			Validation.validate(this, options);
		}
	});
}

})(jQuery);
