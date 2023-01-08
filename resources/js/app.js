import './bootstrap';


if(document.location.pathname == '/'){

    const dropdownCategory = document.getElementById('dropdownCategory');

    dropdownCategory.onclick = () => {
        if(document.querySelector('.main_blockNavigation').style.display == 'flex'){
            document.querySelector('.main_blockNavigation').style.display = 'none';
        }
        else
        {
            document.querySelector('.main_blockNavigation').style.display = 'flex';
        }
    };

    const addProducttoCart = async (id, countProduct)  =>{
        let csrfToken = document.head.querySelector('meta[name="csrf-token"]');
        await fetch('/addProductToUserCart', {
            method: 'post',
            body: JSON.stringify({idProduct : id, countProduct : countProduct}),
            headers:{
                "X-CSRF-Token": csrfToken.content
            }
        });
    };

    const addProduct = (id) => {
        var elements = document.querySelectorAll(`[data-id="${id}"]`);
        const countProduct = parseInt(elements[3].textContent);
        let i =0;
        elements.forEach(element => {
            i++
            if(element.id == 'buy_product')
            {
                element.style.display = 'none';
                elements.forEach(elem => {
                    if(elem.className == 'count_buy_product')
                    {
                        elem.style.display = 'flex';
                        
                    }
                });
                if(i == 1)
                {
                    addProducttoCart(id, countProduct);
                }
            }
        });
    };
    

    const buyProduct = (id) => {
        var elements = document.querySelectorAll(`[data-id="${id}"]`);
        let count = parseInt(elements[3].textContent);
        count++;
        elements.forEach(element => {
            if(element.className == 'count_product'){
                element.innerHTML = count;
            }
        });
    };

    const sellProduct = (id) => {
        var elements = document.querySelectorAll(`[data-id="${id}"]`);
        let count = parseInt(elements[3].textContent);
        if(count == 1)
        {
            elements.forEach(element => {
                if(element.id == 'buy_product')
                {
                    element.style.display = 'block';
                    elements.forEach(elem => {
                        if(elem.className == 'count_buy_product')
                        {
                            elem.style.display = 'none';
                        }
                    });
                }
            });
        }
        else{
            count--;
            elements.forEach(element => {
                if(element.className == 'count_product'){
                    element.innerHTML = count;
                }
            });
        }
    };

    document.onclick = (event) => {
            if(event.target.classList.contains('product_buy')){
                addProduct(event.target.dataset.id);
            }
            if(event.target.classList.contains('buy')){
                buyProduct(event.target.dataset.id);
            }
            if(event.target.classList.contains('sell')){
                sellProduct(event.target.dataset.id);
            }
    };


    //СЛАЙДРЕ МАГАЗИНА
    const sliderLine = document.querySelector('.sliderLineShop'),
        prevButton = document.querySelector('#btn-prevShop'),
        nextButton = document.querySelector('#btn-nextShop'),
        dots = document.querySelectorAll('.dot'),
        countItems = document.querySelector('.sliderLineShop').childElementCount,
        widthElem = document.querySelector('.blockShop_item').offsetWidth,
        marginElems = window.getComputedStyle(sliderLine).columnGap.replace('px', '');

    let position = 0,
        dotIndex = 0;

    if(position == 0){
        prevButton.disabled = true;
    }
    
    const nextSlide = () =>{
        var itemsLeft = countItems - (Math.abs(position) + ((widthElem * 5) + (marginElems * 4))) / widthElem + marginElems;
        if(itemsLeft < 0){
            itemsLeft = 0;
        }
        position -= itemsLeft >= 5 ? ((widthElem * 5) + (marginElems * 4)) : (itemsLeft * widthElem) + ((itemsLeft) * marginElems);
        prevButton.disabled = false;
        //sliderLine.style.left = -position + 'px';
        sliderLine.style.transition = `0.3s`;
        sliderLine.style.transform = `translateX(${position + 'px'})`;
    };

    const prevSlide = () =>{

        if((position += 196) > 0){
            position = 0;
            prevButton.disabled = true;
        }
        else{
            position += 196;
        }   
        
        
        //sliderLine.style.left = position + 'px';
        sliderLine.style.transform = `translateX(${position + 'px'})`;
    };

    nextButton.addEventListener('click', nextSlide);
    prevButton.addEventListener('click', prevSlide);

    // Конец слайдера для магазинов

    //Слайдер для скидочных товаров

    const sliderLineSalle = document.querySelector('.sliderLineSalle'),
    prevButtonSalle = document.querySelector('#btn-prevSalle'),
    nextButtonSalle = document.querySelector('#btn-nextSalle'),
    dotsSalle = document.querySelectorAll('.dot'),
    countItemsSalle = document.querySelector('.sliderLineSalle').childElementCount;

    let positionSalle = 0,
        dotIndexSalle = 0;

    if(positionSalle == 0){
        prevButtonSalle.disabled = true;
    }

    const nextSlideSalle = () =>{
        const itemsLeftSalle = countItemsSalle - (Math.abs(positionSalle) + ((196 * 4.5) + (20 * 4))) / 216;
        positionSalle -= itemsLeftSalle >= 4.5 ? ((196 * 5) + (20 * 4)) : (itemsLeftSalle * 196) + ((itemsLeftSalle - 1) * 20);
        prevButtonSalle.disabled = false;
        sliderLineSalle.style.transition = `0.3s`;
        sliderLineSalle.style.transform = `translateX(${positionSalle + 'px'})`;
    };

    const prevSlideSalle = () =>{

        if((positionSalle += 216) > 0){
            positionSalle = 0;
            prevButtonSalle.disabledSalle = true;
        }
        else{
            positionSalle += 216;
        }   
        
        
        //sliderLine.style.left = position + 'px';
        sliderLineSalle.style.transform = `translateX(${positionSalle + 'px'})`;
    };

    nextButtonSalle.addEventListener('click', nextSlideSalle);
    prevButtonSalle.addEventListener('click', prevSlideSalle);

    //Конец слайдера для скидочных товаров

}

if(document.location.pathname == '/login'){

    const formAuth = (form) =>{
        if(form == "true"){
            document.getElementById('PhonePasswordLogin').style.display = 'block';
            document.getElementById('phoneLogin').style.display = 'none';
            document.getElementById('register').style.display = 'none';
            document.getElementById('keySMSRegister').style.display = 'none';
            document.getElementById('DataCustomerRegister').style.display = 'none';
        }
        else{
            document.getElementById('PhonePasswordLogin').style.display = 'none';
            document.getElementById('phoneLogin').style.display = 'block';
            document.getElementById('register').style.display = 'none';
            document.getElementById('keySMSRegister').style.display = 'none';
            document.getElementById('DataCustomerRegister').style.display = 'none';
        }
    };

    document.onclick = (event) => {
        if(event.target.classList.contains('formAuth')){
            formAuth(event.target.dataset.login);
        }
    };


    const buttonRegister = document.querySelectorAll('.buttonRegister');

    buttonRegister.forEach(elem => {
        elem.onclick = () =>{
            var AuthRegister = document.querySelectorAll('.AuthRegister');
            AuthRegister.forEach(element => {
                element.style.display = 'none';
                document.getElementById('register').style.display = 'block';
            });
        };
    });

    const phoneMask = document.querySelectorAll('.phone_input');

    phoneMask.forEach(elem => {
        elem.onkeyup = () => {
            var x = elem.value;
            if(x[0] == '7' || x[0] == '8' && x.length == 1){
                elem.value = '+7 (';
            }
            if(x.length == 7 ){
                elem.value = x + ') ';
            }
            if(x.length == 12 ){
                elem.value = x + '-';
            }
            if(x.length == 15 ){
                elem.value = x + '-';
            }
        };
    });

    const SMSRegisterContinue = document.getElementById('SMSRegisterContinue');
    const sendPhoneRegister = () =>{

        const formRegister = document.querySelector('#register');

        formRegister.addEventListener('submit', async e =>{
            e.preventDefault();

            const formData = new FormData(formRegister);
            const phone = document.getElementById('registerPhone').value.replace(/[^0-9]/g, '');
            if(phone.length != 11){
               document.getElementById('registerPhone').style.borderColor = 'red';
            }
            return await fetch('/sms',{
                    method: 'POST',
                    body: formData
                })
                .then(
                    (response) => {
                        return response.json();
                    }
                )
                .then(
                    (dataResponse) => {
                        if(dataResponse.status == 'ok')
                        {
                            document.getElementById('smsKeyAuth').style.borderColor = 'rgb(101, 101, 101)';
                            document.getElementById('register').style.display = 'none';
                            document.getElementById('keySMSRegister').style.display = 'block';
                        }
                        if(dataResponse.status == 'error'){
                            document.getElementById('registerPhone').style.borderColor = 'red';
                        }
                    }
                );
        });

        
    };

    SMSRegisterContinue.onclick = sendPhoneRegister();

    const KeySMSRegisterSend = document.getElementById('KeySMSRegisterSend');
    KeySMSRegisterSend.onclick = () =>{

        const formSMSkey = document.querySelector('#keySMSRegister');
        const smsKeyAuth = document.getElementById('smsKeyAuth');

        formSMSkey.addEventListener('submit', async e =>{
            e.preventDefault();

            const formData = new FormData(formSMSkey);

            return await fetch('/valid-sms', {
                method: 'POST',
                body: formData
            })
            .then(
                (response) => {
                    return response.json();
                }
            )
            .then(
                (dataResponse) => {
                    if(dataResponse.status == 'error'){
                        smsKeyAuth.style.borderColor = 'red';
                    }
                    if(dataResponse.status == 'ok'){
                        smsKeyAuth.style.borderColor = 'rgb(101, 101, 101)';
                        document.getElementById('keySMSRegister').style.display = 'none';
                        document.getElementById('DataCustomerRegister').style.display = 'block';
                    }
                }
            );
        });
    };
}
// const saveCustomer = document.getElementById('saveCustomer');

// const dataCustomerSend = () =>{
//     const formCustomer = document.querySelector('#DataCustomerRegister');

//     formCustomer.addEventListener('submit', async e =>{
//         e.preventDefault();

//         const formData = new FormData(formCustomer);

//         const response = await fetch('/add-customer', {
//             method: 'POST',
//             headers: {
//                 'Accept': 'application/json'
//             },
//             body: formData
//         });
//         const rezult = await response.json();
//         console.log(rezult);
//         // if(!rezult){
//         //     document.getElementById('smsKeyAuth').style.borderColor = 'red';
//         // }
//     });
// };

// saveCustomer.onclick = dataCustomerSend();