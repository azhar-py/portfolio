<div id="about">
    <div class="container content-lg">
        <div class="row">
            <div class="col-sm-3 sm-margin-b-30">
                <div class="text-right sm-text-left">
                    <h2 class="margin-b-0">Intro</h2>
                    <p>What I am all about.</p>
                </div>
            </div>
            <div class="col-sm-8 col-sm-offset-1">
                <?php $intro_detail =  get_intro(); ?>

                {{-- {{dd($intro_detail)}} --}}
                <div class="margin-b-60">
                    <p>{{$intro_detail->about}}</p>
                    {{-- <p>I'm Alex Teseira, orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> --}}
                </div>

                <!-- Progress Box -->
                @foreach ($intro_detail->skill as $skill_detail)
                    <div class="progress-box">
                        <h5>{{$skill_detail->name}} <span class="color-heading pull-right">{{$skill_detail->percentage}}%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="{{$skill_detail->percentage}}"></div>
                        </div>
                    </div>
                @endforeach
               
                {{-- <div class="progress-box">
                    <h5>HTML5 <span class="color-heading pull-right">96%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="96"></div>
                    </div>
                </div>
                <div class="progress-box">
                    <h5>JavaSript <span class="color-heading pull-right">52%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="52"></div>
                    </div>
                </div>
                <div class="progress-box">
                    <h5>Photoshop <span class="color-heading pull-right">77%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="77"></div>
                    </div>
                </div> --}}
                <!-- End Progress Box -->
            </div>
        </div>
        <!--// end row -->
    </div>
</div>