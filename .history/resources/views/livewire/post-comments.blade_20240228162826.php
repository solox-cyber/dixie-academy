<div>
    <style>
       .comment-info {
    /* Adjust spacing */
    margin-bottom: 10px;
}

.author {
    /* Ensure flex items wrap properly */
    flex-wrap: wrap;
}

.author img {
    /* Adjust image size */
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}

.author strong {
    /* Add margin between username and date */
    margin-left: 10px;
}

/* Media query for smaller screens */
@media (max-width: 768px) {
    .author {
        /* Adjust alignment for smaller screens */
        align-items: flex-start;
    }

    .author img {
        /* Adjust image size for smaller screens */
        width: 40px;
        height: 40px;
    }

    .author strong {
        /* Adjust margin for smaller screens */
        margin-left: 5px;
    }

    .author .date {
        /* Adjust font size for smaller screens */
        font-size: 12px;
    }
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
                                <span class="author" style="display: flex; align-items: center;">
                                    @if($comment->user->profile_photo_path)
                                        <img src="{{ asset('storage/' . $comment->user->profile_photo_path) }}" alt="{{$comment->user->name}}" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                                    @else
                                        <div style="width: 50px; height: 50px; border-radius: 50%; background-color: #ccc; color: #fff; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                                            {{ strtoupper(substr($comment->user->name, 0, 2)) }}
                                        </div>
                                    @endif
                                    <strong style="margin-left: 10px;">{{$comment->user->name}}</strong>
                                    <span style="margin-left: 10px;" class="date">{{$comment->created_at->diffForHumans()}}</span>
                                </span>
                               <hr>                                                                 
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