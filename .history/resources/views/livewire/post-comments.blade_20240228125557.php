<div class="row discussion" style="margin-top:40px!important">
    <div class="col-lg-9 align-self-center">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h2>Discussions</h2>
                </div>
                @auth
                <form id="contact" action="#" method="post">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="message" type="text"
                                    class="form-control" id="message"
                                    placeholder="YOUR MESSAGE..."
                                    required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit"
                                    class="button">Post Comment</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
                
                @else
                <a wire:navigate href="{{route('login')}}">Login to Post Comments</a>
                @endauth

                <div id="comments" style="margin-top:40px">
                    <!-- Example comment -->
                    @forelse ($this->comments as $comment)
                   
                    <div class="comment">
                        <div class="comment-info">
                            <span class="author"><img src="" alt="John Doe"> John Doe</span>
                            <span class="date">February 27, 2024</span>
                        </div>
                        <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae suscipit arcu.</p>
                    </div>

                    @empty
                        
                    @endforelse

                </div>
            </div>
        </div>




    </div>
</div>