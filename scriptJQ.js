//edit profile script to request to the server using ajax
$(document).ready(function () {
    $('#savepbtn').click(function () {
        let username = $('.profile-container .user .info .eprofile input[name=username]').val();
        let gender = $('.profile-container .user .info .eprofile select[name=gender]').val();
        let email = $('.profile-container .user .info .eprofile input[name=email]').val();
        let phone = $('.profile-container .user .info .eprofile input[name=phone]').val();
        let address = $('.profile-container .user .info .eprofile input[name=address]').val();

        let showPara = $(document.createElement('p'));
        showPara.css({
            fontSize: "12px",
            color: "red",
            marginTop: "4px",
        });

        if (username == "" || email == "" || phone == 0 || address == "") {
            showPara.html("Fields should not be Empty");
            showPara.appendTo('.profile-container .user .info .eprofile');

            setTimeout(function () {
                showPara.hide();
            }, 2000);
        }
        else {
            $.ajax({
                url: 'partials/_editprofile.php',
                method: 'POST',
                data: {
                    editpRequest: true,
                    username: username,
                    gender: gender,
                    email: email,
                    phone: phone,
                    address: address,
                },
                success: function (data) {
                    if (data == 'Profile Edited Successfully') {
                        showPara.css({
                            fontSize: "14px",
                            color: "green",
                        });
                    }
                    showPara.html(data);
                    showPara.appendTo('.profile-container .user .info .eprofile');

                    setTimeout(function () {
                        showPara.hide();
                    }, 2000);
                }
            });
        }
    });
});

//back from editing profile button
$(document).ready(function () {
    $('.bbtn').click(function () {
        let ebtn = $('.editbtn');
        let details = $('.info .row');
        let edit = $('.info .eprofile');

        details.show();
        ebtn.show();
        edit.hide();
    });
});

//edit profile button
$(document).ready(function () {
    $('.editbtn').click(function () {
        let ebtn = $('.editbtn');
        let details = $('.info .row');
        let edit = $('.info .eprofile');

        details.hide();
        ebtn.hide();
        edit.show();
    });
});

//reset password script 
$(document).ready(function () {
    $('#resetbtn').click(function () {
        let username = $('.resetForm input[name=rusername]').val();
        let password = $('.resetForm input[name=rpassword]').val();
        let cnpassword = $('.resetForm input[name=rcpassword]').val();

        // console.log(username);
        // console.log(password);
        // console.log(cnpassword);

        let showPara = $(document.createElement('p'));
        showPara.css({
            fontSize: "12px",
            color: "red",
            marginTop: "6px",
        });

        if (password == "" || cnpassword == "") {
            showPara.html("Fields should not be Empty");
            showPara.appendTo('.resetForm');

            setTimeout(function () {
                showPara.hide();
            }, 2000);
        } else if (cnpassword != password) {
            showPara.html("Passwords don't match");
            showPara.appendTo('.resetForm');

            setTimeout(function () {
                showPara.hide();
            }, 2000);
        }
        else {
            $.ajax({
                url: '_resetpss.php',
                method: 'POST',
                data: {
                    changePassword: true,
                    username: username,
                    password: password,
                },
                success: function (data) {
                    // console.log(data);
                    showPara.html(data);
                    showPara.appendTo('.resetForm');

                    setTimeout(function () {
                        showPara.hide();
                        location.href = "../index.php";
                    }, 2000);

                }
            });
        }
    });
});

//script to send email to reset password
$(document).ready(function () {
    $('#sendMail').click(function () {
        let email = $('input[name=remail]').val();

        // console.log(email);

        let showPara = $(document.createElement('p'));
        showPara.css({
            fontSize: "12px",
            color: "red",
            marginTop: "6px",
        });

        if (email == "") {
            showPara.html("Please Enter Your Email!!!");
            showPara.appendTo('.ls-container .formBox .signinForm .resetForm');

            setTimeout(function () {
                showPara.hide();
            }, 2000);
        } else {
            $.ajax({
                url: 'partials/_rform.php',
                method: 'POST',
                data: {
                    resetRequest: true,
                    email: email,
                },
                success: function (data) {
                    console.log(data);

                    showPara.html(data);
                    showPara.appendTo('.ls-container .formBox .signinForm .resetForm');

                    setTimeout(function () {
                        showPara.hide();
                    }, 2000);
                }
            });
        }
    });
});

//forgot button script
$(document).ready(function () {
    $('#forgotbtn').click(function () {
        let resetForm = $('.ls-container .formBox .signinForm .resetForm');
        let lgf = $('.ls-container .formBox .signinForm .lgf');

        resetForm.show();
        lgf.hide();
    });
});

//same to the below one
function orderSuccess() {
    let cpi = document.querySelectorAll('.cart-itm input[name=proid]');
    let cpq = document.querySelectorAll('.cart-itm .cart-itm-details .cart-itm-price input[name=quantity]');

    let arr1 = new Array(cpi.length);
    let arr2 = new Array(cpq.length);

    for (let i = 0; i < cpi.length; i++) {
        arr1[i] = cpi[i].value;
    }

    for (let i = 0; i < cpq.length; i++) {
        arr2[i] = cpq[i].value;
    }

    // for (let i = 0; i < arr1.length; i++) {
    //     console.log(arr1[i] + "  " + arr2[i]);
    // }

    $.ajax({
        url: 'partials/_orderpage.php',
        method: 'POST',
        data: {
            orderRequest: true,
            cpi: arr1,
            cpq: arr2,
        },
        success: function (data) {
            alert(data);

            // if (data == "You must have to Login First") {
            //     alert(data);
            // }
            // else {
            //     console.log(data);
            // }
        }
    });
}

//myorder script 
$(document).ready(function () {
    $('#paybtn').click(function () {
        let cpi = document.querySelectorAll('.cart-itm input[name=proid]');
        let cpq = document.querySelectorAll('.cart-itm .cart-itm-details .cart-itm-price input[name=quantity]');
        let orderid = document.querySelector('.details-container form input[name=ORDER_ID]').val();

        console.log(orderid);

        let arr1 = new Array(cpi.length);
        let arr2 = new Array(cpq.length);

        for (let i = 0; i < cpi.length; i++) {
            arr1[i] = cpi[i].value;
        }

        for (let i = 0; i < cpq.length; i++) {
            arr2[i] = cpq[i].value;
        }

        // for (let i = 0; i < arr1.length; i++) {
        //     console.log(arr1[i] + "  " + arr2[i]);
        // }

        $.ajax({
            url: 'partials/_orderpage.php',
            method: 'POST',
            data: {
                orderRequest: true,
                cpi: arr1,
                cpq: arr2,
                orderid: orderid,
            },
            success: function (data) {
                alert(data);

                // if (data == "You must have to Login First") {
                //     alert(data);
                // }
                // else {
                //     console.log(data);
                // }
            }
        });
    });
});

//remove product from cart script
function dfc(e) {
    let proid = e.parentElement.querySelector('input[name=proid]').value;

    $.ajax({
        url: 'partials/_removepfc.php',
        method: 'POST',
        data: {
            removepfc: true,
            pid: proid,
        },
        success: function (data) {
            // console.log(data);
            location.reload();
        }
    });
}

//add product to cart script
function atc(e) {
    let proid = e.parentElement.querySelector('input[name=proid]').value;
    let pstock = e.parentElement.querySelector('input[name=pstock]').value;
    let pqn = e.parentElement.querySelector('input[name=pqn]').value;
    // console.log(proid);
    // console.log(pqn);
    // console.log(pstock);

    if (parseInt(pstock) < 1) {
        alert('Product is Out Of Stock');

    } else if (parseInt(pstock) < parseInt(pqn)) {
        alert('Your Product Quantity is more than in stock.');

    } else {
        // console.log("in stock");
        $.ajax({
            url: 'partials/_addptc.php',
            method: 'POST',
            data: {
                addptc: true,
                pid: proid,
                pqn: pqn,
            },
            success: function (data) {
                // console.log(data);
                if (data == 'You must have to Login First') {
                    alert(data);
                }
                else {
                    location.reload();
                }
            }
        });
    }
}

//show details of a product
function showproduct(e) {
    let proid = e.parentElement.querySelector('input');
    // console.log(proid.value);

    $.ajax({
        url: 'script.php',
        method: 'POST',
        data: {
            pid: proid.value,
        },
        success: function (data) {
            // console.log(data);
            $('#product-specs').html(data);
        }
    });
}

//signup script
$(document).ready(function () {
    $('#signupbtn').click(function () {
        let username = $('.username').val();
        let gender = $('select[name=gender]').val();
        let email = $('input[name=email]').val();
        let phone = $('input[name=phone]').val();
        let address = $('input[name=address]').val();
        let password = $('input[name=Crpassword]').val();
        let cnpassword = $('input[name=Cnpassword]').val();

        if (username == "" || email == "" || phone == 0 || address == "" || password == "" || cnpassword == "") {
            let showPara = $(document.createElement('p'));
            showPara.css({
                fontSize: "12px",
                color: "red",
                marginTop: "6px",
            });
            showPara.html("Fields should not be Empty");
            showPara.appendTo('.signupForm form');

            setTimeout(function () {
                showPara.hide();
            }, 2000);
        } else if (username.indexOf(' ') > -1) {
            let showPara = $(document.createElement('p'));
            showPara.css({
                fontSize: "12px",
                color: "red",
                marginTop: "6px",
            });
            showPara.html("There should not be a space in the username");
            showPara.appendTo('.signupForm form');

            setTimeout(function () {
                showPara.hide();
            }, 2000);
        }
        else if (cnpassword != password) {
            let showPara = $(document.createElement('p'));
            showPara.css({
                fontSize: "12px",
                color: "red",
                marginTop: "6px",
            });
            showPara.html("Passwords don't match");
            showPara.appendTo('.signupForm form');

            setTimeout(function () {
                showPara.hide();
            }, 2000);
        }
        else {
            $.ajax({
                url: 'partials/_signup.php',
                method: 'POST',
                data: {
                    signupRequest: true,
                    username: username,
                    gender: gender,
                    email: email,
                    phone: phone,
                    address: address,
                    password: password,
                },
                success: function (data) {
                    let showPara = $(document.createElement('p'));
                    if (data == 'Account Created Succesfully') {
                        showPara.css({
                            fontSize: "16px",
                            color: "green",
                            marginTop: "6px",
                        });
                    }
                    else {
                        showPara.css({
                            fontSize: "12px",
                            color: "red",
                            marginTop: "6px",
                        });
                    }
                    showPara.html(data);
                    showPara.appendTo('.signupForm form');

                    setTimeout(function () {
                        showPara.hide();

                        if (data == 'Account Created Succesfully') {
                            location.reload();
                        }
                    }, 1000);
                }
            });
        }
    });
});

//login script
$(document).ready(function () {
    $('#loginbtn').click(function () {
        let username = $('input[name=lusername]').val();
        let password = $('input[name=lpassword]').val();

        if (username == "" || password == "") {
            let showPara = $(document.createElement('p'));
            showPara.css({
                fontSize: "12px",
                color: "red",
                marginTop: "6px",
            });
            showPara.html("Fields should not be Empty");
            showPara.appendTo('.signinForm form');

            setTimeout(function () {
                showPara.hide();
            }, 2000);
        }
        else {
            $.ajax({
                url: 'partials/_login.php',
                method: 'POST',
                data: {
                    loginRequest: true,
                    username: username,
                    password: password,
                },
                success: function (data) {
                    let showPara = $(document.createElement('p'));
                    if (data == 'Login Successfull') {
                        showPara.css({
                            fontSize: "16px",
                            color: "green",
                            marginTop: "6px",
                        });
                        location.reload();
                    } else {
                        showPara.css({
                            fontSize: "12px",
                            color: "red",
                            marginTop: "6px",
                        });
                    }
                    showPara.html(data);
                    showPara.appendTo('.signinForm form');

                    setTimeout(function () {
                        showPara.hide();

                        if (data == 'Login Successfull') {
                            location.reload();
                        }
                    }, 1000);
                }
            });
        }
    });
});

//logout script
$(document).ready(function () {
    $('.logout').click(function () {
        $.ajax({
            url: 'partials/_logout.php',
            method: 'POST',
            data: {
                logoutRequest: true,
            },
            success: function (data) {
                location.reload();
            }
        });
    });
});

//contact form script
$(document).ready(function () {
    $('#sendmsg').click(function () {
        let name = $('input[name=name]').val();
        let email = $('input[name=email]').val();
        let message = $('textarea[name=message]').val();

        let showPara = $(document.createElement('p'));
        showPara.css({
            fontSize: "12px",
            color: "red",
            marginTop: "6px",
        });

        if (name == "" || email == "" || message == "") {
            showPara.html("Fields should not be Empty");
            showPara.appendTo('.contactform');

            setTimeout(function () {
                showPara.hide();
            }, 3000);
        } else {
            $.ajax({
                url: 'partials/_contact.php',
                method: 'POST',
                data: {
                    contact: true,
                    name: name,
                    email: email,
                    message: message,
                },
                success: function (data) {
                    console.log(data);

                    if (data == 'Message sent Successfully') {
                        showPara.css({
                            fontSize: "16px",
                            color: "green",
                            marginTop: "6px",
                        });
                    }
                    showPara.html(data);
                    showPara.appendTo('.contactform');

                    setTimeout(function () {
                        showPara.hide();
                        location.reload();
                    }, 3000);
                }
            });
        }
    });
});

