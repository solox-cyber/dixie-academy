<div>

    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form wire:submit.prevent="submitForm">
                                <div>
                                    <input wire:model="name" type="text" placeholder="YOUR NAME..." required>
                                    @error('name') <span>{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <input wire:model="email" type="email" placeholder="YOUR EMAIL..." required>
                                    @error('email') <span>{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <input wire:model="subject" type="text" placeholder="SUBJECT..." required>
                                    @error('subject') <span>{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <textarea wire:model="message" placeholder="YOUR MESSAGE..." required></textarea>
                                    @error('message') <span>{{ $message }}</span> @enderror
                                </div>
                                <button type="submit">SEND MESSAGE NOW</button>
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
