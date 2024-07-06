<div class="hero_form" style="width:80%">

                            <h4>Write To Us b</h4>
                            <form class="contact-form " method="post" action="{{ url('save_contact') }}">

                                @csrf
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control inputbox" name="name" id="name"
                                    placeholder="Your Name" required>
                                <label for="name">Your Name</label>
                                <input type="email" class="form-control inputbox" name="email" id="name"
                                    placeholder="Your Email" required>
                                <label for="name">Your Name</label>

                                <select class="form-control inputbox " id="country" name="country"
                                    placeholder="Select Country" required>
                                    <option value="">Country</option>
                                    <option value='us'>United States +(1)</option>
                                    <option value='gb'>United Kingdom +(44)</option>
                                    <option value='jp'>Japan +(81)</option>
                                    <option value='af'>Afghanistan +(93)</option>
                                    <option value='al'>Albania +(355)</option>
                                    <option value='dz'>Algeria +(213)</option>
                                    <option value='as'>American Samoa +(1-684)</option>
                                    <option value='ad'>Andorra +(376)</option>
                                    <option value='ao'>Angola +(244)</option>
                                    
                                </select>

                                <input type="text" class="form-control inputbox" name="phone" id="name"
                                    placeholder="Your Phone" required>
                                <label for="name">Your Name</label>
                                <select class="form-control inputbox" name="address" id="users" required>
                                    <option value="">How Many Users?</option>
                                    <option value="0 - 20">0 - 20</option>
                                    <option value="20 - 50">20 - 50</option>
                                    <option value="50 - 100">50 - 100</option>
                                </select>
                                <!-- <label for="name">Your Name</label>
            <input type="text" class="form-control inputbox" name="name" id="name"> -->

                                {{-- <input type="checkbox" class="form-control inputcheck" name="accept" id="accept"> I'd like a Live Demo --}}

                                {{-- <label for="name">Your Name</label>
<textarea class="form-control inputtext" name="msg" id="name" placeholder="Your Query" > </textarea> --}}
                                <label for="name">Your Name</label>
                                <input type="submit" anem="submit" value="Book A Demo" class="btn btn-primary book"
                                    style="color:#fff!important;width:100%;    border: none;">

                            </form>
                        </div>