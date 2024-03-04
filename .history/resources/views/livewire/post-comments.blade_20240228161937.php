<div>
    <style>
        .discussion #contact textarea {
            width: 100%;
            min-height: 140px;
            max-height: 180px;
            border-radius: 20px;
            background-color: #f7f7f7;
            outline: none;
            border: none;
            box-shadow: none;
            font-size: 13px;
            font-weight: 500;
            color: #7a7a7a;
            padding: 15px;
            margin-bottom: 30px;
        }
    
        .discussion #contact button {
            font-size: 13px;
            color: #fff;
            background-color: #a12c2f;
            padding: 12px 30px;
            display: inline-block;
            border-radius: 22px;
            font-weight: 500;
            text-transform: uppercase;
            transition: all .3s;
            border: none;
            outline: none;
        }
    </style>
    
    <div class="row discussion" style="margin-top:40px!important">
        <div class="col-lg-9 align-self-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <h2>Discussions</h2>
                    </div>
                    @auth
                  
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea wire:model="comment" name="message" type="text"
                                        class="form-control" id="message"
                                        placeholder="YOUR MESSAGE..."
                                        style="width: 100%;
                                        min-height: 140px;
                                        max-height: 180px;
                                        border-radius: 20px;
                                        background-color: #f7f7f7;
                                        outline: none;
                                        border: none;
                                        box-shadow: none;
                                        font-size: 13px;
                                        font-weight: 500;
                                        color: #7a7a7a;
                                        padding: 15px;
                                        margin-bottom: 30px;"
                                        required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button wire:click="postComment" id="form-submit"
                                        class="button"
                                        style=" font-size: 13px;
                                        color: #fff;
                                        background-color: #a12c2f;
                                        padding: 12px 30px;
                                        display: inline-block;
                                        border-radius: 22px;
                                        font-weight: 500;
                                        text-transform: uppercase;
                                        transition: all .3s;
                                        border: none;
                                        outline: none;"
                                        >Post Comment</button>
                                </fieldset>
                            </div>
                        </div>
                  
                    @else
                    <a wire:navigate href="{{route('login')}}">Login to Post Comments</a>
                    @endauth
    
                    <div id="comments" style="margin-top:40px">
                        <!-- Example comment -->
                        @forelse ($this->comments as $comment)
                       
                        <div class="comment" style="margin-bottom:20px!important">
                            <div class="comment-info">
                                <span class="author"><img src="{{$comment->user->profile_photo_path}}" alt="" /> <strong>{{$comment->user->name}}</strong></span>
                                {{ asset('storage/' . $comment->user->profile_photo_path) }}
                                <span class="date">{{$comment->created_at->diffForHumans()}}</span>
                            </div>
                            <p class="comment-text">
                                {{$comment->comment}}
                            </p>
                        </div>
    
                        @empty
                        <div class="comment">
                            <div class="comment-info">
                                <span class="date">No Comments Posted</span>
                            </div>
                           
                        </div> 
                        @endforelse
    
                    </div>
                </div>
            </div>
    
    
    
    
        </div>
    </div>
</div>