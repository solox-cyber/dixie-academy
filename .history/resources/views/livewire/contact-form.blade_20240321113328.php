<div>

    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="#" method="post">
                                <form wire:submit.prevent="submitForm">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Let's get in touch</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input wire:model="name" type="text" placeholder="YOUR NAME..." required>
            @error('name') <span>{{ $message }}</span> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input wire:model="email" type="email" placeholder="YOUR EMAIL..." required>
            @error('email') <span>{{ $message }}</span> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input wire:model="subject" type="text" placeholder="SUBJECT..." required>
            @error('subject') <span>{{ $message }}</span> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea wire:model="message" placeholder="YOUR MESSAGE..." required></textarea>
                                            @error('message') <span>{{ $message }}</span> @enderror
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">SEND MESSAGE
                                                NOW</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-info">
                        <ul>
                            {{-- <li>
                                <h6>Telegram</h6>
                                <span>010-020-0340</span>
                            </li>
                            <li>
                                <h6>Youtube</h6>
                                <span>010-020-0340</span>
                            </li> --}}
                            <li>
                                <h6>Email Address</h6>
                                <span>support@dixieacademy.com</span>
                            </li>
                            {{-- <li>
                                <h6>Street Address</h6>
                                <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
                            </li> --}}
                            <li>
                                <h6>Website URL</h6>
                                <span>www.dixieacademy.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
