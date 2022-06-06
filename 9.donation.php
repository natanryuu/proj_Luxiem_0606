<?php
$pageName = 'donation';
$title = '抖內區';
require './parts/connect-db.php';

?>

<?php include __DIR__ . '/parts/html-head.php' ?>

<link rel="stylesheet" href="./css/donation.css">

<?php include __DIR__ . '/parts/html-navbar.php' ?>

    <!-- 抖內頁 PC -->

    <div class="container-pc">
        <div class="donation-upper-part">
            <div class="donation-upper-part-left">
                <div class="donation-img-wrap">
                    <img src="imgs/donate/Vox Akuma _ Luxiem 1.png" alt="">
                    </div>
                    <div class="donation-person-name"> Vox Akuma </div>
    
                    <div class="container">
                        <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="text-left">
                                <p class="lead">
                                    <input type="text" name="username" class="form-control" placeholder="名稱" id="name-input" style="resize: none" >
                                </p>
                                <p class="lead">
                                    <textarea type="text"
                                    class="form-control textarea-control" rows="6" placeholder="贊助訊息" 
                                    id="yourmessage-input"
                                    data-emojiable="true"></textarea>
                                </p>
                                <p class="lead">
                                    <textarea  type="number"
                                    class="form-control textarea-control" 
                                    id="donation-amount-text-input"
                                    rows="1" placeholder="抖內給Vox Akuma總金額"
                                    oninput="if(value>500)value=500;if(value.length>4)value=value.slice(0,4);"></textarea>
                                </p>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
            <div class="donation-upper-part-right">
                <div class="donation-upper-part-right-reaction">
                    <div class="reaction-wrap">
                        <div class="reaction-username">
                            ❤
                            <input id="name-display" readonly
                            style="background: none; border:none; resize: none;"></input>
                        </div>
                        <div class="yourmessage">
                            
                            <input id="yourmessage-display" readonly style="background: none; border:none; resize: none;"></input>
                        </div>
                        <div class="donation-amount-text">NT＄ 
                            <input id="donation-amount-text-display" readonly style="background: none; border:none; resize: none;"></input>
                        </div>
                            <!-- <div class="button-wrap">
                                <button class="button-wrap-with-icon-botton"  id="submit-button1" data-action="submit">
                                贊助
                                </button>
                            </div> -->
                        
                    </div>
                    <div class="donation-deco-img-wrap">
                        <img src="imgs/donate/Wiggle_Vox320.gif" alt="">
                    </div>

                </div>
                <div class="donation-amount-area">
                    <div class="upper-buttons">
                        <button id="donation-nt-10">NT$ 10</button>
                        <button id="donation-nt-50">NT$ 50</button>
                        <button id="donation-nt-100">NT$ 100</button>
                        <button id="donation-nt-1000">NT$ 500</button>
                    </div>
                    <div class="down-contents">
                        <div class="down-contents-donation-amount">
                            <input id="upper-buttons-display" readonly 
                             name="name" 
                             style="background: none; border:none; resize: none;"></input>
                        </div>
                        <!-- onclick="buttonCode()"  -->
                        <div class="button-wrap-with-icon">
                            <button class="button-wrap-with-icon-botton"  id="submit-button2" data-action="submit" >
                            贊助
                        </button>
                        </div>
                    </div>
                    <div class="underline">
                        <svg width="537" height="1" viewBox="0 0 537 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="0.5" x2="537" y2="0.5" stroke="#D3B572"/>
                            </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="donation-ranking-area">
            <div class="donation-ranking-title">
                抖內排名
            </div>
            <div class="ranking-area-row">
                <div class="ranking-area-col">
                    <div class="ranking-area-item">
                        <div class="ranking-area-item-icon">
                            <svg width="47" height="46" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="47" height="46" rx="12" fill="url(#pattern0)"/>
                                <path d="M25.1374 13.5455V31H21.4471V17.0483H21.3448L17.3477 19.554V16.2812L21.6687 13.5455H25.1374Z" fill="black"/>
                                <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_834_8525" transform="translate(0.0544662) scale(0.00163399)"/>
                                </pattern>
                                <image id="image0_834_8525" width="534" height="612" xlink:href="data:image/png;base64,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"/>
                                </defs>
                                </svg>
                                
                        </div>
                        <div class="ranking-area-item-donator-name">
                            ASHLEY 
                        </div>
                        <div class="ranking-area-item-donation-amount">
                            NT$5000
                        </div>
                    </div>
                    <div class="ranking-area-item">
                        <div class="ranking-area-item-icon">
                            <svg width="47" height="46" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="47" height="46" rx="12" fill="url(#pattern0)" fill-opacity="0.8"/>
                                <path d="M15.8562 31V28.3409L22.0692 22.5881C22.5977 22.0767 23.0408 21.6165 23.3988 21.2074C23.7624 20.7983 24.038 20.3977 24.2255 20.0057C24.413 19.608 24.5067 19.179 24.5067 18.7188C24.5067 18.2074 24.3903 17.767 24.1573 17.3977C23.9244 17.0227 23.6062 16.7358 23.2028 16.5369C22.7994 16.3324 22.342 16.2301 21.8306 16.2301C21.2965 16.2301 20.8306 16.3381 20.4329 16.554C20.0352 16.7699 19.7283 17.0795 19.5124 17.483C19.2965 17.8864 19.1886 18.3665 19.1886 18.9233H15.6857C15.6857 17.7812 15.9442 16.7898 16.4613 15.9489C16.9783 15.108 17.7028 14.4574 18.6346 13.9972C19.5664 13.5369 20.6403 13.3068 21.8562 13.3068C23.1062 13.3068 24.1942 13.5284 25.1204 13.9716C26.0522 14.4091 26.7766 15.017 27.2937 15.7955C27.8107 16.5739 28.0692 17.4659 28.0692 18.4716C28.0692 19.1307 27.9386 19.7812 27.6772 20.4233C27.4215 21.0653 26.9641 21.7784 26.305 22.5625C25.646 23.3409 24.717 24.2756 23.5181 25.3665L20.9698 27.8636V27.983H28.2994V31H15.8562Z" fill="black"/>
                                <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_836_8531" transform="translate(0.0544662) scale(0.00163399)"/>
                                </pattern>
                                <image id="image0_836_8531" width="534" height="612" xlink:href="data:image/png;base64,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"/>
                                </defs>
                                </svg>
                                
                                
                        </div>
                        <div class="ranking-area-item-donator-name">
                            ROBERT 
                        </div>
                        <div class="ranking-area-item-donation-amount">
                            NT$4000
                        </div>
                    </div>
                    <div class="ranking-area-item">
                        <div class="ranking-area-item-icon">
                            <svg width="47" height="46" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="47" height="46" rx="12" fill="url(#pattern0)" fill-opacity="0.5"/>
                                <path d="M21.9563 31.2386C20.6836 31.2386 19.5501 31.0199 18.5558 30.5824C17.5671 30.1392 16.7859 29.5312 16.212 28.7585C15.6438 27.9801 15.3512 27.0824 15.3342 26.0653H19.0501C19.0728 26.4915 19.212 26.8665 19.4677 27.1903C19.729 27.5085 20.0756 27.7557 20.5075 27.9318C20.9393 28.108 21.4251 28.196 21.9648 28.196C22.5273 28.196 23.0245 28.0966 23.4563 27.8977C23.8881 27.6989 24.2262 27.4233 24.4705 27.071C24.7148 26.7187 24.837 26.3125 24.837 25.8523C24.837 25.3864 24.7063 24.9744 24.445 24.6165C24.1893 24.2528 23.82 23.9687 23.337 23.7642C22.8597 23.5597 22.2915 23.4574 21.6325 23.4574H20.0046V20.7472H21.6325C22.1893 20.7472 22.6808 20.6506 23.1069 20.4574C23.5387 20.2642 23.8739 19.9972 24.1126 19.6562C24.3512 19.3097 24.4705 18.9062 24.4705 18.446C24.4705 18.0085 24.3654 17.625 24.1552 17.2955C23.9506 16.9602 23.6609 16.6989 23.2859 16.5114C22.9165 16.3239 22.4847 16.2301 21.9904 16.2301C21.4904 16.2301 21.033 16.321 20.6183 16.5028C20.2035 16.679 19.8711 16.9318 19.6211 17.2614C19.3711 17.5909 19.2376 17.9773 19.2205 18.4205H15.6836C15.7006 17.4148 15.9876 16.5284 16.5444 15.7614C17.1012 14.9943 17.8512 14.3949 18.7944 13.9631C19.7433 13.5256 20.8143 13.3068 22.0075 13.3068C23.212 13.3068 24.266 13.5256 25.1694 13.9631C26.0728 14.4006 26.7745 14.9915 27.2745 15.7358C27.7802 16.4744 28.0302 17.304 28.0245 18.2244C28.0302 19.2017 27.7262 20.017 27.1126 20.6705C26.5046 21.3239 25.712 21.7386 24.7347 21.9148V22.0511C26.0188 22.2159 26.9961 22.6619 27.6665 23.3892C28.3427 24.1108 28.6779 25.0142 28.6722 26.0994C28.6779 27.0938 28.391 27.9773 27.8114 28.75C27.2376 29.5227 26.445 30.1307 25.4336 30.5739C24.4222 31.017 23.2631 31.2386 21.9563 31.2386Z" fill="black"/>
                                <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_836_8534" transform="translate(0.0544662) scale(0.00163399)"/>
                                </pattern>
                                <image id="image0_836_8534" width="534" height="612" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAhYAAAJkCAYAAABNrWgZAAAACXBIWXMAABYlAAAWJQFJUiTwAAAeW0lEQVR4nO3dfbBndX3Y8e+5SypPu+uSKk/rQiIjJgwiYxGJLrbWSCJQYkMMFAwz6gpIp//A6ExmomAz0zHVfzrd8LDQKRWDtrQOSnGkTtpZaRAJA0gYXSXVXZbHJOACytPee/rH3pVl9+79PX3P+T6c12vG0ZG7v99nueec3/v3Ped3fk3btgEAIIa51AMAAPUQFgBANMICAIhGWAAA0QgLACAaYQEARCMsAIBohAUAEI2wAACiERYAQDTCAgCIRlgAANEICwAgGmEBAEQjLACAaIQFABCNsAAAohEWAEA0wgIAiEZYAADRCAsAIBphAQBEIywAgGiEBQAQjbAAAKIRFgBANMICAIhGWAAA0QgLACAaYQEARCMsAIBoDhj1A1tuv6SPOXLXhhCa1EMAQAo/PvPasX/WisVo7V7/DUCl5nfO/+ew63jvmD+lkSsWvIaVC4B6tSsOWJF6huJZsQCAJbQhnJ16hhIJi8lZHgOozz7H9iaEr6cYpHTCYjriAqAS7UJ7TeoZaiIslrEw3/6HZf6xuAAoXBPaf9LMNRennqMmwmIZCwsL/v0AVKwNzT2pZ6iNF85l7HxhfvWIH7FqAVAux/AOCItlzL8yf/AYP2bDBCiPY3dHhMUyDvnVg/7lmD9qAwWAICwAGB5vBjskLOKxoQLkb9JjtWP7hIRFXDZAgHw5RvdAWAAA0QiL/Zu2bBUxQH4cm3siLLphAwbIh2Nyj4RFd2zIAOk5FvdMWAAA0QiLbillgHQcgxMQFt2zYQP0z7E3EWHRDxs4QH9OSj3AkAkLAGpzf+oBhkxY9MeqBUD3HGsTExb9ssEDdKerY6xj9wSExdK63IhsoABUS1gAUANv2jIhLNKwAwDE45iaEWGRjh0BYHaOpZkRFmnZIQCoirBIT1wATMfxM0PCAoASiYpMCYs82EEAxueYmTFhAQAjtCH8fuoZSiEs8qHAAUZLcqxc2Lnw/hTPWyJhkRdxAbAfbdtel+q5F16ePzDVc5dGWORHXADsoz2xaZoNqZ79lZfmD0n13KURFvvywg6Qneb7KZ/94DUH/kHK5y+JsMiTuAF4lWNiQYRFvuxIAI6FxREWebNDAUPmGFggYZE/OxYAxRAWAOQoxzdVOc6UHWFRBhszMCSOeQUTFq/14dQDLOOk1AMAwCjCYg8L8+17U8+wjPtTDwDQA6sVhRMWe2jnF16XeoYR7HBAzRzjKiAs9vDKi/MHp55hDHY8oEKt072VEBZ7OHDVPzo/9QxjEhdAZZr7U09AHMKiWO1bU08AEIk3SxURFsVqfpB6AoBZtW17U+oZiEtYlE3lAwVrT2qa5oLUUxCXsCifuAAKVeR1FY65IwgLAFLwAl0pYVEHOyhQEsesigmLV5W+oZc+PwAVEBZ1ERdA7hynKicsAOiLqBgAYVEfOy6QI8emgRAWdbIDA5CEsKhU27bXpZ4BYJE3OwNyQOoB6EbTNBtCCJ9IPQezWWjD+uX++VwTvtPXLF1Y7u9X+t+NXxIVAyMs6taGEJrUQ7DLQhvWzzVh8yR/Zi7yb2/b9h0Xrj169bYuXrRr//sxFVExQMKifuKiHyMPoLFfRKexbu3qcb/waalpl/07Fvb3C8F+AZ1wjcUgtCeknqAGd3z74avCrhfXpf5Tm0H+HW+86f6vpB2pKjVuM7udk3qAnDVtu/zvfsvtl/Q0SlI17wC7eXc2poU2rP/G/9xyzlNbn/7ohstOW5N6HtK58eq7XzzkiENvfOcpa7+zbu3qL6eepyCOqZX58ZnXjv2zwmKXIewEIQxsR5jQULYBIlhow+mu41ha27Y3NE3z0dRz9GBQx9NJwsI1FsPieotdRAQz2c9FqvatEMJAooJluMaCqi20Yf3d3/hh7dcKkIfXbGf3PfjEJxPPk4L9C2ExQNXv+Nu2P3vBdVd/d3sIoZ1rwuZTz35r6pEYoJNPPGJjWIyMzXdu/VTqeXpQ/bGF8bjGYpch7hC1LdsO8XdIuWrb/0IY3j5Y4+9wvya5xsKKxXAVfRBYfAfo9Aalqu30XA1/ByIRFhTj2mvu/mFYPBCf/p5jPp96HoioDSG0t9xw785Rt3HP0FCj4kOpB8iVsBi27A8IW7fvuCAsHnQvvuTU41PPA10692PvWLH4iZNSrsvI/hjSlYWF9t2pZ8iVsCC7A8PiO7Y2hNAeM9ktmqEai6tyNZ0uqcr8y/NvSD1DroQFod05/6XUM9zytYeuCYsH0Em/yAoGog0htIunBHMw6Nh5+eevHJp6hlwJixA+nHqA1JoDVlyY4nkX2rB+98dCz/3QCRenmAFKs3hKsP3WzQ8sJLxXxqCjIoQQXnruxeNSz5CrwYfFwvzCe1PPkIneDhTbFq+bmGvC5k9c+q6j+3peqMkZ55/U7L5XRs/XYww+KkII4bBj17wt9Qy5GnxYzK2YG+Ld8fan6wNGG0JoJ/xqa2CEPa/HWAx3SGbwYUG3vnXzAwvBxWfQm8Vwb0MIbQcfXbUfM5KwYG9RDhy77zlxxvknDerudJCTuSZsjnhvDFHBWNzS286yP9MGgX+fkKlt23dcuG7t6i9P8Uft10sbzBsnt/QmhrEPJJs23vV0cLoDsrfnaZLUs1TCv8clCAumtvvryDdcdtqa1LMAE9t9sedHxvg5GNvQw+Kc1ANkbskDyqbr77kzhND6OnIo37q1q/9L2HWh51K3qBYVTOyA1AOkNL9z4XdWHDD0thppnwPLho+fkmIOoENzTbgz9QzUYdCvqisOmKv+ylQA6NOgwwIAiEtYAADRCAsAIBphAQBEIywAgGiEBQAQjbAAgOm5idhehhwWNgYAiGzIYQEARCYsAIBohAUAEI2wAACiERYAQDTCAgCIRlgAANEICwAgGmEBAEQjLABgBgvz7cbUM+REWADALJrwQuoRcjLUsPA9IQBEMTfXXJ56hpwMNSwAgA4ICwAgGmEBAEQjLACAaIQFABCNsACAGbUh/H7qGXIhLABgRvMv7Twj9Qy5EBYAMKNf/Oylo1PPkIshhsWHUw8AQF1WHX7IB1PPkIvBhcX8zoV/lnoGAKjV4MKifWXh4NQzAECtBhcWL7+486DUMwBArQYXFgevOfAPUs8AALUaXFgAAN0RFgBANMICAOJoUw+QA2EBAEQjLACAaIYWFpapAKBDQwsLAKBDwgIAiEZYAADRCAsAIBphAQBEIywAgGiEBQAQjbAAAKIZUli4ORYAXRv8a82QwgIA6JiwAACiERYAQDTCAgCIRlgAANEICwAgGmEBAEQjLAAgrg+lHiAlYQEAEe18Zf6E1DOkJCwAIKK//dHfH5R6hpSqD4snn3r+j4JbrALQk+NPOPyPv3rDvc+mniOV6sPi8DceemPqGQAYlj/82DtWpp4hldrDwkoFAKkM8jWo2rD41s0PLKSeAYDBG1xcVBkWmzbe9fQZ55/UpJ4DAMLA4qK6sNh0/T13brjstDWp5wCAPQwmLqoKi63bd1yw4eOnvDv1HACwtxu/dN/XU8/Qh6rC4pi1q29KPQMALOWij5x89o033f+V1HN0raawGMwyEwBluujCt//h5ju3fir1HF2qJSxEBQBFOP09x3w+9QxdqiEsRAUApan2tavosLj+2u9tTT0DAEypyrgoNiweffy5P/r4xe9cl3oOAJjWpo13PZ16htiKDYujj1zpO0AAKNqGy05bc8e3H74q9RwxlRoWVS4fATA8H3j/cZ9JPUNMJYaFqACgNtW8thUVFv9n808/m3oGAOjCLTfcuzP1DDEUExaPPfH8Bf/09GOvTD0HAHTh3I+9Y0UNF3MWExZHHXGo23UDULUNl522ZqEN61PPMYtSwqKac08AsJy5JmxOPcMssg+LW2/b8oXUMwBAz4p9Q519WJxz1vGXp54BAPpW6hvr3MOi2GIDgFmcc9bxl2/b/uwFqeeYVLZhcePVd7+QegYASGnd2lXFfXAhy7DYfOfWT1106akHpp4DAFLbdP09d6aeYRJN2y5/tmHL7Zf0NMprOAUCAK9qUj75j8+8duyfzXHFQlQAwGsV89qYVViUeJEKAPShlGsPswqLEi9SAYA+XHTpqQfe9+ATn0w9xyg5hUUxyzwAkMLJJx6xMfUMo2QRFnd8++GrUs8AACW47urvbk89w3Jy+VSI1QoAGF+vnxIp6lMhN37pvq+nngEACpPtG/KkYbHQhvUXfeTks1POAAAlyvVTIknDovSvhgWAVHK9Q3WysNi08a6nUz03AFQiu1MiycJiw2WnrUn13ABAN1KFRXaFBQCFyuo1NfmnQgCA2dx625YvpJ5htxRhkVVZAUDpzjnr+MtTz7Bbr2Fxy9ceuqbP5wOAAcnijXuvYXHuh064uM/nAwD61VtY3HLDvTv7ei4AGKjkqxa9hcW5H3vHir6eCwBIo5ew8H0gANCbpKsWvYSF7wMBgP7c9+ATn0z13J2HhdUKAOjXyScesTHVc3ceFlYrAKB/qd7YdxoWz21/NvnVqQAwRKne2HcaFivXrury4QGAZSy0YX3fz9llWFitAICE5pqwuffn7PsJAYD+9L1q0UlY3PHth6/q4nEBgMls+96jva5adBIWH3j/cZ/p4nEBgMkce+rRYfOdWz/V1/NFD4s+hwcARjv9Pcd8vq/nih4WfQ4PAIzn1tu2fKGP54kaFrd87aFrYj4eABDHOWcdf3kfzxM1LM790AkXx3w8ACCebdt3XND1c/i4KQAMxLq1q2/q+jlihoUbYgFA5rr+kIUVCwAYkK4/ZBElLFLcixwAmE6X33waJSxS3IscAJhOl9986lQIABDNzGGx6fp77owxCADQq04+dDFzWGz4+CnvjjEIAFC+mcJiaw832gAAutHFt5E3bbv8SsiW2y9Z7h+7dwUAlK0Z9QM/PvPasR/MxZsAMGD3PfjEJ2M+nrAAgAF7+ac/2xjz8WYJC6dBAKBwp5791qiPZ8UCAAbuuqu/uz3WYwkLABi4T1z6rqNjPdZUYRH7Qg8AoA5ThcXJJx4R9UIPACCtbZHuTeVUCAAQ1q1dfVOMx5k4LG69bcsXYjwxAFCficPifW8/8vIuBgEA0lpow/pZH2PisFi5dtWszwkAZGiuCZtnfowYgwAAhDBhWPg2UwCo26zfeDpRWBwT6YpRACBPp731jZ+Z5c87FQIA/NKs11IKCwAgGmEBAOxt6m8wFxYAQDSThMXU9QIADIMVCwAgGmEBAOxj2tt7CwsAYB/T3t5bWAAA0YwVFtu2P+tW3gDASGOFxQ9/+NRbuh4EACjfWGHxgfcfN9N9wwGA8myb4stHXWMBACzpH555YfWkf0ZYAABL+rsnnz980j8jLACAJU1zKYSwAACiGRkWjz3xvI+aAgBjGRkW9/z1oyf3MQgAUL6RYfHkI8+c18cgAED5RobFMa8/6Kg+BgEAyjcyLH5r/a81fQwCAJRvZFisXLuqjzkAgAr4uCkAsF8LbVg/yc8LCwBgv5548vl1k/y8sAAA9uvv/+HnKyf5eWEBAEQjLACA/frVww7+xSQ/LywAgP068oiVP5nk54UFALBfc034zkQ/P+oHbrnh3vnpxwEAhmRkWLz5nUf/mz4GAQDKNzIsTj7xiD/vYxAAoHxjXWNx621bvtj1IABA+cYKi3POOv6KrgcBAMo3yadCfMspALCsiT5uunX7jgu7GgQAyMsd3374c5P+mYnC4pi1q78crFwAwCC84fBDn5z0zxww5XP9Mi52f53qXBM2T/lYAECGpvlk6LRh8Ut73JFr1EpGO+tzAQB5c0tvAGAf095qQlgAAPuY9lYTwgIAiKavsHB9BQCUY+pPgFqxAACiERYAwC8ttOH0Wf68sAAAQggh3HjT/V/d4zYSUxEWAEAIIYSLLnz7ebM+hrAAAEKI9JUdwgIABu7Gm+7/aqzHEhYAMGCbNt71TIxTILv1ERbuYQEAGXpu+7Nhw2WnHRbzMa1YAMBArVy7Ksp1FXsSFgAwTNGjIgRhAQCDs237sxd29dgHdPXAAEB+Ftpw+rq1q2a6CdZyrFgAwEAstOH0We+sOYqwAIABuPW2LV/sOipC6Dos2vDZTh8fABjpWzc/0J5z1vFX9PFcnYbFo4/veLTLxwcAlrfp+nv+7xnnn9TbGYpOn+iZp19c2eXjAwD7t2njXc9s+Pgp7+nzOTsNi22P7Hhzl48PAOxf7LtqjsPFmwBANJ2GxQd/9y2Xdfn4AEBerFgAANEICwAgGmEBAEQjLACAaIQFABCNsAAAohEWAEA0wgIAiEZYAADRCAsAIBphAQBEIywAgGiEBQAQjbAAAKIRFgBANMICAIhGWAAA0QgLACAaYQEARCMsAIBohAUAEI2wAACiERYAQDTCAgDq1KR4UmEBAETTaVjc/s0fbezy8QGAvHQaFq9//eue6vLxAYC8dBoWv3bMGmEBAAPSaVgceeSqw7t8fAAgL91evNmEqzp9fAAgKz4VAgC1acMPUj21sACA2jThv6d6amEBAPX5k1RPLCwAgGiEBQAQjbAAAKLpIyySfAkKANA/KxYAQDTCAgCIRlgAANEICwCoS9JrG4UFABCNsAAAohEWAEA0fYWFe1kAwABYsQAAohEWAEA0wgIA6pH80gNhAQBE02dYJK8oAKBbViwAoAJt2/4w9QwhCAsAqELTNL+ReoYQeg6Lxx979tI+nw8A6FevYXHkUauu6fP5AIB+ORUCAKVrw5WpR9hNWABA6ZpwVeoRdhMWAEA0KcLC/SwAoFJWLACAaIQFAJQtqzMBwgIAiCZVWGRVVwBAHFYsAIBohAUAlCu7MwDJwuKhh566ItVzAwDdSBYWJ5zwxi+mem4AKF3btn+TeoalOBUCAAVqmubE1DMsJXVYZHNvcwBgdqnD4srEzw8AJcruos3dUocFAFARYQEARJNDWGS7nAMATCaHsAAAxpf1G3JhAQBEk0tYZF1fAJCDhfmFralnGCWXsAg3XHP346lnAICcza2YOzb1DKNkExYf/Be/8bnUMwBArtq2/UnqGcaRTVgcedSqa1LPAAC5aprm11PPMI5swmLRn6UeAACYXm5h8enUAwAA08stLACAfRXz6ckcw6KYf3kAwGvlGBYAQKGEBQDkraiV/FzDoqh/iQDQhbZt/yb1DJPKNSzC7d/80cbUMwBASk3TnJh6hkllGxYf/N23/OvUMwBAMm14MPUI08g2LABg0JrwttQjTCP3sHCtBQAUJPewAIAhKvaNdQlh4ftDAKAQJYTFp0PB5QYAEyr6Na+EsAAAClFSWBRdcAAwhn+XeoBZlRQWAFC7P049wKxKCwurFgDUqorXuNLCAgDIWIlhUUXRAcAeqnltKzEsAIBMlRoW1ZQdAINX1WtaqWEBADWo7u7SJYdFVYUHwCB9OvUAsZUcFgBQsirfIJceFlX+UgCoXrWvX6WHRQgV/3IAoDQ1hAUAlKTqN8S1hEXVvyQAqlH961UtYQEAZKCmsKi+AgEo2iBep2oKixAG8ksDoDiDeX2qLSwAgIRqDIvBVCEARRjU61KNYQEAJFJrWAyqDgHI1uBej2oNixAG+MsEICuDfB2qOSwAIJVBRkUI9YfFYH+xAJBC7WERgrgAoF+Dft0ZQliEMPBfMgD0ZShhAQB9GPwb2SGFxeB/2QB0yutMGFZYhOCXDkA3vL4sGlpYAEBsomIPQwwLGwAAdGSIYRGCuAAgDq8nexlqWIRgYwBgNl5HljDksACAaYmK/Rh6WNgwACCioYdFCOICgMl43ViGsNjFRgLAOLxejCAsXmVjAWA5XifGICwAYDRRMSZh8Vo2HACYgbDYl7gAYE9eFyYgLJZmIwIgBK8HExMW+2djAhg2rwNTEBbLs1EBDJPj/5SExWg2LoBhcdyfgbAAgFeJihkJi/HY0ADq51gfgbAYnw0OoF6O8ZEIi8nY8ADq49gekbCYnA0QoB6O6ZEJi+nYEAHK51jeAWExPRskQLkcwzsiLGZjwwQoj2N3h4TF7GygAOVwzO6YsIjDhgqQP8fqHgiLeGywAPlyjO6JsIjLhguQH8fmHgmL+GzAAPlwTO6ZsOiGDRkgPcfiBIRFd5pgowZIxfE3EWHRPRs3QH+8qUtMWPTDRg7QPcfaDAiL/tjgAbrjGJsJYdEvGz5AfI6tGREW/bMDAMTjmJoZYZGGHQFgNi7SzJSwSMdOATAdx86MCYv07CAA43PMzJywyIMdBWA0x8oCCIt82GEAlubUcUGERV7sPACv5ZhYGGGRJzsSgGNhkYRFvuxQwFBZvS2YsMibnQsYGse8wgmLMtjRgCFwrKuAsCiHHQ6oldXZihyQegAmsnvHa5NOARCPoKjE2Yv/bcWiTHZEoHRWKSolLMplpwRK5dhVMWFRPjsoUApviAZAWNTBzgrkzjFqIIRFXey4QG688RkYYVEfOzGQC8eiARIW9bJDA6l4gzNg7mNRN/e9APokJhAWAyEwgC4JigE6ez//v1Mhw2LnB2JzXOE1rFgMj9ULIAZBwZKExXAJDGAagoJlCQsEBjAOQcFYXGPBbg4awD7al+ZDcHxgAlYs2JPVC2C3JoQQmtetSD0HhREWLEVgwHBZnWAmwoLlCAwYiBce+cXOg9508K+knoN87e++FXsTFoxDYEDFnvnJ89sOXPm6n6aegzq4eJNJWCKFinzzy99/8aG/fvJ/rFp3yH866B//yntTz0MdrFgwqSZYuYBi/eLJ58Nd//sn4SfPvviD095z7J+f8Jtv+I+pZ6IuwoJp7LlyITKgAD/7f0+He763Pfz2eW9r/vl5J6Yeh8KMe31FCE6FMDtfjwwZe+bhp0MI4frX//phzW+f9zb7Kp0TFsTShBD+7Oa/eOBbqQcBQlh4aT489vhzF6857rAmhLAh9TwMh1MhxPTp8//VSbv/t1MkkE4z97oV4agjV6aegwESFnTFdRjQP6c6SM6pEPrQhBCav/zLv/33qQeBmvzVXY9cFV69zklUkAVhQW/e9743fyqE0Hzl5u/fmnoWKNlXvnL/rSGE5rdOe9OVqWeBvTVtu/wq9ZbbL+lpFAbKaRIYn1UJknjrmdeO/bOusSA112LA8sQERXEqhJw0IYTmoYeeuiL1IJDSQw89cUVw3QSFciqE3FnFYEiEBFlyKoSaOFVC7cQEVXEqhJLs+bG6P008C0yrCT4iSsWEBaX6k+D+GBRir/tNQNVcY0FtnC4hJ0KCKrjGgiHb+0AuNOiTkGDwnAqhdq85n/3Y489dnHgeKvHoYzs2BNdLwD6EBYNy1JErrwuLLwLf/e62K9NOQ4H+NCxuP0cftfr61MNAam3b7vMfp0IYrHe9a91VIYSr9vi/nDZhb1YhYELCAl611IuI2BgOEQEROBUCy9v7HHrz2OPPXfy/7vjxNWnHYlp3373tc2GPUxrB9REQlY+bQhxWNvImHGAG+/u46VIN4VQIxLG/Fy7B0S8BAYkJC+jWqBc64TE+0QAFEBaQ1tIvlm347KOP73j0kW07jn7iiefX/d7v/eZHe56rN7d/80cbD1tz4N+9ad3qR48+avXaEMKVqWcCpucaCyhfCaseVhugYJNcYzEyLJqmvuPBN1IPAEDVzk49QE9cvAkAjDRq0WE5wgIAFg1lpaFLbpAFAEQjLACAaIQFABCNsAAAonHxJgBVcOFlHqxYAADRCAsAIJpBngpZarnM3TgBqNksN72ahBULACAaYQEARDPIUyEA5MunO8pmxQIAiMaKBQBZsFJRBysWAEA0wgIAiEZYAADRuMYCADLX182tYhAWAPTGBZr1cyoEAIjGigUAJFbSqY5RrFgAANFYsQCgc66tGA4rFgBANFYsAOhUrqsVNV3XkBNhAUB0ucYE3XMqBACIRlgAANEIi0WW7QBgdq6x2EMJcfGN1AMAwDKsWAAA0VixKMykqypWOADok7AAoHruWdEfp0IAgGiEBQAQjVMhABTFaY28WbEAAKKxYlE5nyIBoE9WLACAaIQFABBNM+oimKZpehqFUjhdAt0r4SsGUnHxZt5cYwEk48UT6vHz+/5rc8jJH26FBQAws6Zp3vSL+//bs8KCiY3zLtPpEoBhWWiafzvXNn/lGguyIkjy43QFuXGNRZ5+/v2vvdC24RkrFmTFixhAqZoDmyYcKSwAyIoVibIJCwBgZruD0A2yAIBohAUAEI1TIQDAzNqw61OkwgIAiGDXSRBhAQDMbPd9r1xjAQBEIywAgGicCgEAZtas2PXfViwAgGisWADQC7fqHgYrFgBANFYsAICZNTt3rUgJCwBgZvM7XwmhmXMqBACIo2mtWAAQiYszB65tQmhcvAkARGTFAqAgVgXIle8KAQCiExYAQDTCAgCIRlgAAFG0bSssAIB4hAUAEI2wAACi+f9/Yyia0zsckAAAAABJRU5ErkJggg=="/>
                                </defs>
                                </svg>
                                
                        </div>
                        <div class="ranking-area-item-donator-name">
                            JANESSA
                        </div>
                        <div class="ranking-area-item-donation-amount">
                            NT$3000
                        </div>
                    </div>
                </div>
                <div class="ranking-area-col">
                    <div class="ranking-area-item">
                        <div class="ranking-area-item-icon">
                           4
                        </div>
                        <div class="ranking-area-item-donator-name">
                            ESTHER
                        </div>
                        <div class="ranking-area-item-donation-amount">
                            NT$1500
                        </div>
                    </div>
                    <div class="ranking-area-item">
                        <div class="ranking-area-item-icon">
                            5
                        </div>
                        <div class="ranking-area-item-donator-name">
                            ARIANA
                        </div>
                        <div class="ranking-area-item-donation-amount">
                            NT$1200
                        </div>
                    </div>
                    <div class="ranking-area-item">
                        <div class="ranking-area-item-icon">
                           6
                        </div>
                        <div class="ranking-area-item-donator-name">
                            JOSIAH
                        </div>
                        <div class="ranking-area-item-donation-amount">
                            NT$1000
                        </div>
                    </div>
                </div>

            </div>


            <select class="choose-time-list" >
                <option>Weekly </option>
                <option>Monthly </option>
            </select>
        </div>
    </div>

    <!-- 抖內頁 mobile -->

    <div class="container-mobile">
        <!-- 第一部分 -->
        <div class="donation-upper-part">
            <div class="donation-img-wrap">
                <img src="imgs/donate/Vox Akuma _ Luxiem 1.png" alt="">
            </div>
            <div class="donation-person-name"> Vox Akuma </div>
        </div>

        <!-- 第二部分 表格-->
        <div class="donation-upper-part-left">
                <div class="container-1">
                    <div class="row-1">
                        <div class="col-12">
                            <div class="text-left">
                                <p class="lead">
                                    <input type="text" name="username" class="form-control" placeholder="名稱" id="name-input-m" style="resize: none" >
                                </p>
                                <p class="lead">
                                    <textarea type="text"
                                    class="form-control textarea-control" rows="6" placeholder="贊助訊息" 
                                    id="yourmessage-input-m"
                                    data-emojiable="true"></textarea>
                                </p>
                                <p class="lead">
                                    <input  type="number"
                                    class="form-control textarea-control" 
                                    id="donation-amount-text-input-m"
                                    rows="1" placeholder="抖內給Vox Akuma總金額"
                                    oninput="if(value>500)value=500;if(value.length>4)value=value.slice(0,4);"></input>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- 第三部分 -->

        <div class="donation-upper-part-right-reaction">
            <div class="reaction-wrap">
                <div class="reaction-username">
                    ❤
                    <input id="name-display-m" readonly
                    style="background: none; border:none; resize: none;"></input>
                </div>
                <div class="yourmessage">
                    
                    <input id="yourmessage-display-m" readonly style="background: none; border:none; resize: none;"></input>
                </div>
                <div class="donation-amount-text">NT＄ 
                    <input id="donation-amount-text-display-m" readonly style="background: none; border:none; resize: none;"></input>
                </div>
            </div>
            
            <div class="donation-deco-img-wrap">
                <img src="imgs/donate/Wiggle_Vox320.gif" alt="">
            </div>

        </div>
        <!-- 第一個贊助按鈕 -->
        <!-- <div class="button-wrap-mobile">
            <button class="button-wrap-with-icon-botton"  id="submit-button1-m" data-action="submit">
            贊助
            </button>
        </div> -->
        <!-- 第四部分 黑底快速贊助 -->
        <div class="donation-upper-part-right-mobile">

            <div class="donation-amount-area">
                <div class="upper-buttons">
                    <button id="donation-nt-10">NT$ 10</button>
                    <button id="donation-nt-50">NT$ 50</button>
                    <button id="donation-nt-100">NT$ 100</button>
                    <button id="donation-nt-1000">NT$ 500</button>
                </div>
                <div class="down-contents">
                    <div class="down-contents-donation-amount">
                        <input id="upper-buttons-display-m" readonly 
                        name="name" 
                        style="background: none; border:none; resize: none;"></input>
                    </div>
                    <div class="button-wrap-with-icon">
                        <button class="button-wrap-with-icon-botton"  id="submit-button2-m" data-action="submit" >
                        贊助
                        </button>
                    </div>
                </div>
                <div class="underline">
                    <svg width="240" height="1" viewBox="0 0 240 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="0.5" x2="240" y2="0.5" stroke="#D3B572"/>
                    </svg>  
                </div>
            </div>
        </div>
</div>




<?php include __DIR__ . '/parts/html-script.php' ?>

<!-- pc 輸入以及反映  name, yourmessage, donation amount -->
<script>
    $('#name-input').keyup(function() {
    $('#name-display').val($('#name-input').val());
  });

  $('#yourmessage-input').keyup(function() {
    $('#yourmessage-display').val($('#yourmessage-input').val());
  });

  $('#donation-amount-text-input').keyup(function() {
    $('#donation-amount-text-display').val($('#donation-amount-text-input').val());
  });
</script>

<!--pc  按下抖內金按鈕並顯示按鈕上的金額 -->

<script>
    $(".upper-buttons button").on("click", function(){
    $('#upper-buttons-display').val($(this).text());
});
</script>

<!--mobile  按下抖內金按鈕並顯示按鈕上的金額 -->

<script>
    $(".upper-buttons button").on("click", function(){
    $('#upper-buttons-display-m').val($(this).text());
});
</script>

<!-- mobile 輸入以及反映  name, yourmessage, donation amount -->
<script>
    $('#name-input-m').keyup(function() {
    $('#name-display-m').val($('#name-input-m').val());
  });

  $('#yourmessage-input-m').keyup(function() {
    $('#yourmessage-display-m').val($('#yourmessage-input-m').val());
  });

  $('#donation-amount-text-input-m').keyup(function() {
    $('#donation-amount-text-display-m').val($('#donation-amount-text-input-m').val());
  });
</script>

<!-- pc 按下抖內金按鈕並顯示按鈕上的金額 -->

<script>
    $(".upper-buttons button").on("click", function(){
    $('#upper-buttons-display').val($(this).text());
});
</script>

<!-- mobile  按下抖內金按鈕並顯示按鈕上的金額 -->



<!--pc 贊助按鈕 1 -->

<script>

    var updonationInput = document.getElementById("donation-amount-text-display");
    var submitBtn = document.querySelector("#submit-button1");
    
    function FsubmitBtn(value) {
      var str = "";
      var submitValue = updonationInput.value;
      str = submitValue;
      alert("感謝贊助 NT$" + str); 
      window.location.reload(); 
    }
    submitBtn.addEventListener("click", FsubmitBtn);
    
</script>

<!--pc 贊助按鈕 2 -->

<script>

    var donationInput = document.getElementById("upper-buttons-display");
    var submitBtn = document.querySelector("#submit-button2");

    function FsubmitBtn(value) {
        var str = "";
        var submitValue = donationInput.value;
        str = submitValue;
        alert("感謝贊助 " + str);
        window.location.reload(); 
    }
    submitBtn.addEventListener("click", FsubmitBtn);

</script>

<!-- mobile 贊助按鈕 1 -->

<script>

    var updonationInput = document.getElementById("donation-amount-text-display-m");
    var submitBtn = document.querySelector("#submit-button1-m");
    
    function FsubmitBtn(value) {
      var str = "";
      var submitValue = updonationInput.value;
      str = submitValue;
      alert("感謝贊助 NT$" + str); 
      window.location.reload(); 
    }
    submitBtn.addEventListener("click", FsubmitBtn);
    
</script>

<!-- mobile 贊助按鈕 2 -->

<script>

    var donationInput = document.getElementById("upper-buttons-display-m");
    var submitBtn = document.querySelector("#submit-button2-m");

    function FsubmitBtn(value) {
        var str = "";
        var submitValue = donationInput.value;
        str = submitValue;
        alert("感謝贊助 " + str);
        window.location.reload(); 
    }
    submitBtn.addEventListener("click", FsubmitBtn);

</script>

<?php include __DIR__ . '/parts/html-last.php' ?>