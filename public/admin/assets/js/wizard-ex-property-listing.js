!(function () {
    window.Helpers.initCustomOptionCheck();
    var e = document.querySelector(".flatpickr"),
        l = document.querySelector(".contact-number-mask"),
        s = $("#plCountry"),
        u = document.querySelector("#plFurnishingDetails"),
        l =
            (l && new Cleave(l, { phone: !0, phoneRegionCode: "US" }),
            s &&
                (select2Focus(s),
                s.wrap('<div class="position-relative"></div>'),
                s.select2({
                    placeholder: "Select country",
                    dropdownParent: s.parent(),
                })),
            e && e.flatpickr({ minDate: "today" }),
            u &&
                new Tagify(u, {
                    whitelist: [
                        "Fridge",
                        "TV",
                        "AC",
                        "WiFi",
                        "RO",
                        "Washing Machine",
                        "Sofa",
                        "Bed",
                        "Dining Table",
                        "Microwave",
                        "Cupboard",
                    ],
                    maxTags: 10,
                    dropdown: {
                        maxItems: 20,
                        classname: "tags-inline",
                        enabled: 0,
                        closeOnSelect: !1,
                    },
                }),
            document.querySelector("#wizard-property-listing"));
    if (null !== l) {
        var s = l.querySelector("#wizard-property-listing-form"),
            e = s.querySelector("#personal-details"),
            u = s.querySelector("#property-details"),
            c = s.querySelector("#property-features"),
            p = s.querySelector("#property-area"),
            d = s.querySelector("#price-details"),
            m = [].slice.call(s.querySelectorAll(".btn-next")),
            s = [].slice.call(s.querySelectorAll(".btn-prev"));
        let t = new Stepper(l, { linear: !0 }),
            o = FormValidation.formValidation(e, {
                fields: {
                    plFirstName: {
                        validators: {
                            notEmpty: {
                                message: "Please enter your first name",
                            },
                        },
                    },
                    plLastName: {
                        validators: {
                            notEmpty: {
                                message: "Please enter your last name",
                            },
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: ".col-sm-6",
                    }),
                    autoFocus: new FormValidation.plugins.AutoFocus(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                },
                init: (e) => {
                    e.on("plugins.message.placed", function (e) {
                        e.element.parentElement.classList.contains(
                            "input-group"
                        ) &&
                            e.element.parentElement.insertAdjacentElement(
                                "afterend",
                                e.messageElement
                            );
                    });
                },
            }).on("core.form.valid", function () {
                t.next();
            }),
            i = FormValidation.formValidation(u, {
                fields: {
                    plPropertyType: {
                        validators: {
                            notEmpty: {
                                message: "Please select property type",
                            },
                        },
                    },
                    plZipCode: {
                        validators: {
                            notEmpty: { message: "Please enter zip code" },
                            stringLength: {
                                min: 4,
                                max: 10,
                                message:
                                    "The zip code must be more than 4 and less than 10 characters long",
                            },
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: function (e, t) {
                            return "plAddress" !== e
                                ? ".col-sm-6"
                                : ".col-lg-12";
                        },
                    }),
                    autoFocus: new FormValidation.plugins.AutoFocus(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                },
            }).on("core.form.valid", function () {
                t.next();
            });
        l = $("#plPropertyType");
        l.length &&
            (select2Focus(l),
            l.wrap('<div class="position-relative"></div>'),
            l
                .select2({
                    placeholder: "Select property type",
                    dropdownParent: l.parent(),
                })
                .on("change", function () {
                    i.revalidateField("plPropertyType");
                }));
        let a = FormValidation.formValidation(c, {
                fields: {},
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: ".col-sm-6",
                    }),
                    autoFocus: new FormValidation.plugins.AutoFocus(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                },
            }).on("core.form.valid", function () {
                t.next();
            }),
            n = FormValidation.formValidation(p, {
                fields: {},
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: ".col-md-12",
                    }),
                    autoFocus: new FormValidation.plugins.AutoFocus(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                },
            }).on("core.form.valid", function () {
                t.next();
            }),
            r = FormValidation.formValidation(d, {
                fields: {},
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: ".col-md-12",
                    }),
                    autoFocus: new FormValidation.plugins.AutoFocus(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                },
            }).on("core.form.valid", function () {
                alert("Submitted..!!");
            });
        m.forEach((e) => {
            e.addEventListener("click", (e) => {
                switch (t._currentIndex) {
                    case 0:
                        o.validate();
                        break;
                    case 1:
                        i.validate();
                        break;
                    case 2:
                        a.validate();
                        break;
                    case 3:
                        n.validate();
                        break;
                    case 4:
                        r.validate();
                }
            });
        }),
            s.forEach((e) => {
                e.addEventListener("click", (e) => {
                    switch (t._currentIndex) {
                        case 4:
                        case 3:
                        case 2:
                        case 1:
                            t.previous();
                    }
                });
            });
    }
})();
