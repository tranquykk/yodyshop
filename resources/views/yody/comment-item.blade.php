
{{-- @if ($arrComments != null) --}}
   @foreach ($arrComments as $item)
      <div id="sapo-review-reply-{{$item->rating_id}}" class="sapo-review-reply-item">
         <p class="sapo-review-reply-author"><span>{{$item->fullname}}</span></p>
         <p class="sapo-review-reply-body">{{$item->comment}}</p>
         <div class="sapo-review-reply-actions" style="color: #030d78">
            <ul>
               <li><span style="font-size: 12px" itemprop="datePublished">15:26 16/01/2023</span></li>
            </ul>
         </div>
      </div>
   @endforeach
{{-- @endif --}}
