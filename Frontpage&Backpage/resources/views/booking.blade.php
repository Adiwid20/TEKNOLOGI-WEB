<x-app-layout>

    <head>
        <title>Booking</title>
    </head>

    <div class='container'>
        <div class='window'>
            <div class='order-info'>
                <div class='order-info-content'>
                    <h2>Order Summary</h2>
                    <div class='line'></div>
                    <table class='order-table'>
                        <tbody>
                            <tr>
                                <td><img src='https://i.pinimg.com/564x/0d/3f/5e/0d3f5ea58c5828162a193e43468c1f6f.jpg'
                                        class='full-width'></img>
                                </td>
                                <td>

                                    <br> Kecak Fire Gianyar <br>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class='price'> Rp. 100.000</div>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                    <div class='line'></div>
                    <table class='order-table'>
                        <tbody>
                            <tr>
                                <td><img src='https://i.pinimg.com/564x/ed/4f/d0/ed4fd019f8557c71b72df37b3b77feed.jpg'
                                        class='full-width'></img>
                                </td>
                                <td>
                                    <br> <span class='thin'>Heaven's Gate Lempuyang
                                    </span>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class='price'> Rp. 50.000</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- <div class='line'></div>
                    <table class='order-table'>
                        <tbody>
                            <tr>
                                <td><img src='https://dl.dropboxusercontent.com/s/nbr4koso8dpoggs/6136C1p5FjL._SL1500_.jpg'
                                        class='full-width'></img>
                                </td>
                                <td>
                                    <br> <span class='thin'>Monobento</span>
                                    <br>Double Lunchbox<br> <span class='thin small'> Color: Pink, Size: Medium</span>
                                </td>
    
                            </tr>
                            <tr>
                                <td>
                                    <div class='price'>$25.95</div>
                                </td>
                            </tr>
                        </tbody>
                    </table> --}}
                    <div class='line'></div>
                    <div class='total'>
                        <span style='float:left;'>
                            <div class='thin dense'>VAT 19%</div>
                            <div class='thin dense'>Delivery</div>
                            TOTAL
                        </span>
                        <span style='float:right; text-align:right;'>
                            <div class='thin dense'>$68.75</div>
                            <div class='thin dense'>$4.95</div>
                            $435.55
                        </span>
                    </div>
                </div>
            </div>
            <div class='credit-info'>
                <div class='credit-info-content'>
                    <table class='half-input-table'>
                        <tr>
                            <td>Please select your card: </td>
                            <td>
                                <div class='dropdown' id='card-dropdown'>
                                    <div class='dropdown-btn' id='current-card'>Visa</div>
                                    <div class='dropdown-select'>
                                        <ul>
                                            <li>Master Card</li>
                                            <li>American Express</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png'
                        height='80' class='credit-card-image' id='credit-card-image'></img>
                    Card Number
                    <input class='input-field'></input>
                    Card Holder
                    <input class='input-field'></input>
                    <table class='half-input-table'>
                        <tr>
                            <td> Expires
                                <input class='input-field'></input>
                            </td>
                            <td>CVC
                                <input class='input-field'></input>
                            </td>
                        </tr>
                    </table>
                    <button class='pay-btn'>Checkout</button>

                </div>

            </div>
        </div>
    </div>

    <!-- component -->
    <div class="flex items-center justify-center p-12">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">
            <form action="https://formbold.com/s/FORM_ID" method="POST">
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                First Name
                            </label>
                            <input type="text" name="fName" id="fName" placeholder="First Name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                Last Name
                            </label>
                            <input type="text" name="lName" id="lName" placeholder="Last Name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]">
                        How many guest are you bringing?
                    </label>
                    <input type="number" name="guest" id="guest" placeholder="5" min="0"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                Date
                            </label>
                            <input type="date" name="date" id="date"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                Time
                            </label>
                            <input type="time" name="time" id="time"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <label class="mb-3 block text-base font-medium text-[#07074D]">
                        Are you coming to the event?
                    </label>
                    <div class="flex items-center space-x-6">
                        <div class="flex items-center">
                            <input type="radio" name="radio1" id="radioButton1" class="h-5 w-5" />
                            <label for="radioButton1" class="pl-3 text-base font-medium text-[#07074D]">
                                Yes
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="radio1" id="radioButton2" class="h-5 w-5" />
                            <label for="radioButton2" class="pl-3 text-base font-medium text-[#07074D]">
                                No
                            </label>
                        </div>
                    </div>
                </div>

                <div>
                    <button
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
    

    @vite(['resources/css/booking.css', 'resources/js/booking.js'])

</x-app-layout>
