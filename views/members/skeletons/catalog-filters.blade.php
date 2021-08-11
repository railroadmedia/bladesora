<div class="flex flex-row flex-wrap mb-1">
    @for($i = 0; $i < $length; $i++)
        <div class="flex flex-column xs-12 sm-3 ph-1 mb-2 m-xs-only">
            <div
                class="skeleton-loader corners-10"
                style="height:50px;width:100%;"
            ></div>
        </div>
    @endfor
</div>
