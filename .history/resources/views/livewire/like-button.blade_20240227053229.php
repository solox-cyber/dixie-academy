<button wire.loading.attr="disabled" wire:click="toggleLike()">



    <svg wire:loading.delay xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" style="background: none;">
        <g transform="rotate(0 50 50)">
          <circle cx="50" cy="50" fill="none" stroke="#e15b64" stroke-width="4" r="20" stroke-dasharray="94.24777960769379 33.41592653589793">
            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" keyTimes="0;1" values="0 50 50;360 50 50"></animateTransform>
          </circle>
          <circle cx="50" cy="50" fill="none" stroke="#f47e60" stroke-width="4" r="30" stroke-dasharray="94.24777960769379 62.83185307179586">
            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" keyTimes="0;1" values="0 50 50;360 50 50"></animateTransform>
          </circle>
          <circle cx="50" cy="50" fill="none" stroke="#f8b26a" stroke-width="4" r="40" stroke-dasharray="94.24777960769379 92.74886853195244">
            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" keyTimes="0;1" values="0 50 50;360 50 50"></animateTransform>
          </circle>
        </g>
      </svg>



    <svg wire:loading.delay.remove xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
        <path fill="none" stroke="{{ (Auth::user()?->hasLiked($post)) ? '#ff2a2a' : '#000'}}" stroke-width="2"
            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
    </svg>
    <span class="ml-2 text-gray-600">
        {{$post->likes()->count()}}
    </span>
</button>
