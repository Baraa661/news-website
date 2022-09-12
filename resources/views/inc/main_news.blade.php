<!-- Main News Start-->
<div class="main-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    @foreach($read as $r)
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="{{ $r->image }}" />
                                <div class="mn-title">
                                    <a href="">{{ substr($r->title, 0, 40) }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-3">
                <div class="mn-list">
                    <h2>Read More</h2>
                    <ul>
                        @foreach($read as $r)
                            <li><a href="">{{ substr($r->title, 0, 40) }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main News End-->
