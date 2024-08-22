
<button wire:click="like" class="meta-item" >
@if ($hasLiked)
<i class="fa-solid fa-thumbs-up fa-xl" style="color: #005151;"></i>
@else
<i class="fa-regular fa-thumbs-up fa-xl" style="color: #020306;"></i>
@endif
<br>
<br>
<p >{{ $likeCount }}</p>

</button>

