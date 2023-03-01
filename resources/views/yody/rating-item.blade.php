
@if (count($arrRatings)!=0)
<div id="sapo-product-reviews-noitem" >
    <div>
        <div class="content">
            @if (count($arrRatings)==0)
                <p>Hiện tại sản phẩm chưa có đánh giá nào, bạn hãy trở thành người đầu tiên đánh giá cho sản phẩm này</p>
            @endif
            <div class="product-reviews-summary-actions">
                <button type="button" class="btn-new-review ratings" >Gửi đánh giá của bạn</button>
            </div>
        </div>
    </div>
</div>
<div id="sapo-product-reviews-sub">
    <div>
    <div id="bpr-list" class="sapo-product-reviews-list">
        @foreach ($arrRatings as $rating)
        @if ($rating->parent_id == 0)
                <div id="sapo-review-293896" class="sapo-review" itemtype="http://schema.org/Review">
                <div class="sapo-review-header">
                        <span class="sapo-review-author" itemprop="author">{{$rating->fullname}}</span>
                        <div class="sapo-product-reviews-star" data-score="5" data-number="5" title="gorgeous">
                            <fieldset class="rating" style="margin-top: 10px;">
                                <fieldset disabled class="rating dis" style="margin: -8px 0 0 10px; font-size: 10px"  >
                                <input type="radio" name="rating_action {{$rating->rating_id}}" {{ ($rating->rating_action==5)?"checked":"" }}/><label id="dis"></label>
                                <input type="radio" name="rating_action {{$rating->rating_id}}" {{ ($rating->rating_action==4)?"checked":"" }}/><label id="dis"></label>
                                <input type="radio" name="rating_action {{$rating->rating_id}}" {{ ($rating->rating_action==3)?"checked":"" }}/><label id="dis"></label>
                                <input type="radio" name="rating_action {{$rating->rating_id}}" {{ ($rating->rating_action==2)?"checked":"" }}/><label id="dis"></label>
                                <input type="radio" name="rating_action {{$rating->rating_id}}" {{ ($rating->rating_action==1)?"checked":"" }}/><label id="dis"></label>
                                </fieldset>
                                </fieldset>
                        </div>
                </div>
                <div class="sapo-review-body">
                    <span class="sapo-review-content-body" itemprop="description">{{$rating->comment}}</span>
                </div>
                <div class="sapo-review-actions" style="color: #030d78">
                    <ul>
                        <li class="sapo-review-reply" data-rating-id="{{$rating->rating_id}}"><a class="sapo-review-reply-{{$rating->rating_id}}" title="Gửi trả lời" href="javascript: void(0);">Gửi trả lời</a></li>
                        <li><span class="s" style="font-size: 12px" itemprop="datePublished">3 phút trước</span></li>
                    </ul>
                </div>
                <div class="sapo-review-reply-form hide rep-{{$rating->rating_id}}" id="">
                    <div>
                       <form method="get" action="" id="sapo-review-reply-{{$rating->rating_id}}">
                          <input type="hidden" name="product_id" id="reply_comment_id_{{$rating->rating_id}}" value="{{$arrProduct->product_id}}">
                          <div class="bpr-form-contact">
                             <div class="form-group form-group__multiple">
                                <div class="bpr-reply-form-contact-name require">
                                   <input type="text" maxlength="100" id="reply_author_{{$rating->rating_id}}" name="fullname2" placeholder="Nhập tên của bạn">
                                   <span class="bpr-reply-form-message-error"></span>
                                </div>
                                <div class="bpr-reply-form-contact-email require">
                                   <input type="text" maxlength="50" id="reply_email_{{$rating->rating_id}}" name="email2" value="" placeholder="Địa chỉ Email">
                                   <span class="bpr-reply-form-message-error"></span>
                                </div>
                                <div class="bpr-reply-form-contact-phone option">
                                   <input type="tel" maxlength="15" id="reply_phone_{{$rating->rating_id}}" name="phone2" value="" placeholder="Số điện thoại (nếu có)">
                                   <span class="bpr-reply-form-message-error"></span>
                                </div>
                             </div>
                            <div class="form-group__textarea">
                                <div class="form-group">
                                   <div class="bpr-reply-form-review-body">
                                      <textarea maxlength="1000" id="reply_body_{{$rating->rating_id}}" name="comment" rows="1" placeholder="Nhập trả lời của bạn"></textarea>
                                   </div>
                                </div>
                                <div class="bpr-form-actions">
                                   <button type="button" onclick="addComment({{$rating->rating_id}})" class="bpr-reply-button-submit"><i class="fa fa-spinner fa-pulse" aria-hidden="true"></i><span>Trả lời</span></button>
                                </div>
                             </div>
                            <span class="bpr-reply-form-message-error bpr-reply-form-message-error-body"></span>
                            </div>
                            <div class="bpr-reply-form-review-error">
                            <p class="error"></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sapo-review-reply-list" id="comments-{{$rating->rating_id}}">
                    
                    @foreach ($arrRatings as $item)
                    @if ($rating->rating_id == $item->parent_id)
                        <div id="sapo-review-reply-{{$item->rating_id}}" class="sapo-review-reply-item">
                            <p class="sapo-review-reply-author"><span>{{$item->fullname}}</span></p>
                            <p class="sapo-review-reply-body">{{$item->comment}}</p>
                            <div class="sapo-review-reply-actions" style="color: #030d78">
                            <ul>
                                <li><span style="font-size: 12px" itemprop="datePublished">15:26 16/01/2023</span></li>
                            </ul>
                            </div>
                        </div>
                    @endif
                    @endforeach
                        
                </div>
                <div class="sapo-review-reply-form" style="display: none;"></div>
                <div style="display:none;" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating">
                    <span itemprop="ratingValue">5</span>
                </div>
                </div>
        @endif   
        @endforeach
    </div>
    <div id="bpr-more-reviews" style="display: none;"></div>
    </div>
</div>
@endif
<script type="text/javascript">
    $(".ratings").click(function() {
        $('#empModal').removeClass('hide');
    })

    $(".close-modal").click(function() {
        $('#empModal').addClass('hide');
    })

    function addRating(id) {
        var action = $('input[type="radio"][name="rating"]:checked').val();
        var parent_id = $('input[type="hidden"][name="parent_id"]').val();
        var fullname =  $("input[name='fullname']").val();
        var email =  $("input[name='email']").val();
        var phone =  $("input[name='phone']").val();
        var comment = $("#review_body").val();
        
        // alert(parent_id);
        $.ajax({
            url: 'add-rating/'+id,
            type: 'GET',
            data: {action:action, fullname:fullname, email:email, phone:phone, comment:comment, parent_id:parent_id},
        }).done(function(res){
            console.log(res);
            $("#change-item-rating").empty();
            $("#change-item-rating").html(res);
            $("input[name='fullname']").val("");
            $("input[name='email']").val("");
            $("input[name='phone']").val("");
            $("textarea[name='body']").val("");
            $('#empModal').addClass('hide');
            $('#bpr-review-thanks').modal('show');
        });
    }

    $(".sapo-review-reply, .activess").click(function() {
        var rating_id = $(this).data('rating-id');
        alert(rating_id);
        if($(this).attr('class') == 'sapo-review-reply') {
            // alert(rating_id);
            $(`.rep-${rating_id}`).removeClass('hide');
            $('.sapo-review-reply').removeClass('sapo-review-reply').addClass('activess');
            // $('.sapo-review-reply').addClass('activess');
            $(`.sapo-review-reply-${rating_id}`).html("Đóng");
        } else {
            $(`.rep-${rating_id}`).addClass('hide');
            $('.activess').addClass('sapo-review-reply').removeClass('activess');
            $(`.sapo-review-reply-${rating_id}`).html("Gửi trả lời");
        }
        
    })

    function addComment(id) {
        // document.getElementById(`reply_author_${id}`).attributes["required"] = true;  
        // document.getElementById(`reply_author_${id}`).required;
        var action = 5;
        var product_id = $('input[type="hidden"][name="product_id"]').val();
        var fullname =  $(`#reply_author_${id}`).val();
        var email =  $(`#reply_email_${id}`).val();
        var phone =  $(`#reply_phone_${id}`).val();
        var comment = $(`#reply_body_${id}`).val();
        
        // alert(comment);
        $.ajax({
            url: 'add-comment/'+id,
            type: 'GET',
            data: {action:action, fullname:fullname, email:email, phone:phone, comment:comment, product_id:product_id},
        }).done(function(cs){
            console.log(cs);
            $(`#comments-${id}`).empty();
            $(`#comments-${id}`).html(cs);
            $('.sapo-review-reply-form').addClass('hide');
            $("input[name='fullname2']").val("");
            $("input[name='email2']").val("");
            $("input[name='phone2']").val("");
            $("textarea[name='comment']").val("");
            $('.activess').addClass('sapo-review-reply').removeClass('activess');
            $(`.sapo-review-reply-${id}`).html("Gửi trả lời");
            // $(`.sapo-review-reply-${id}`).html("Gửi trả lời");
            // $('#empModal').addClass('hide');
            // $('#bpr-review-thanks').modal('show');
        });

        
    }
</script>