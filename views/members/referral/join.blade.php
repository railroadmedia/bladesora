<div class="referral-sections">
    <section class="tw-text-center tw-text-white tw-py-6 md:tw-py-10 lg:tw-pt-12 lg:tw-pb-16" style="background:linear-gradient(to bottom, #010e2c, #000c17);">
        <div class="tw-container tw-mx-auto tw-max-w-6xl">
            <h1 class="tw-leading-tight lg:tw-mb-14"><strong>{{ $referredByUserName }} gifted you 30 days<br class="tw-hidden md:tw-inline"> of free drum lessons!</strong></h1>
            <div class="tw-flex tw-flex-wrap xl:tw-flex-nowrap tw-items-center tw-px-4">
                <div class="tw-flex-shrink-0 tw-w-full xl:tw-w-auto tw-my-5 md:tw-my-6 xl:tw-my-0">
                    @include('bladesora::members.referral._brand-card', [
                        'showEmpty' => false,
                        'brand' => $brand,
                    ])
                    <ul class="fa-ul tw-text-left tw-mb-0 tw-mt-4 md:tw-mt-6 xl:tw-mt-14 tw-ml-6 md:tw-ml-7 xl:tw-ml-8 tw-w-auto tw-inline-block">
                        <li class="tw-mb-4 xl:tw-mb-6 tw-leading-tight"><i class="fas fa-li fa-check tw-text-drumeo"></i> Organized step-by-step lessons for all skill levels.</li>
                        <li class="tw-mb-4 xl:tw-mb-6 tw-leading-tight"><i class="fas fa-li fa-check tw-text-drumeo"></i> Play your favorite songs with better practice tools.</li>
                        <li class="tw-leading-tight"><i class="fas fa-li fa-check tw-text-drumeo"></i> Get your questions answered by helpful drum teachers.</li>
                    </ul>
                </div>

                <div class="xl:tw-pl-10 tw-max-w-md xl:tw-max-w-none tw-mx-auto">
                    <form id="commentform" name="drumeo" method="post" action="{{ $joinUrl }}">
                        <input type="hidden" name="redirect" value="/members">

                        <label class="tw-inline-block tw-w-full tw-text-left" for="name"><strong>Your name</strong> <em class="tw-opacity-70 tw-text-xs md:tw-float-right">Used to say hello!</em></label>
                        <input class="tw-pt-0 tw-inline-block tw-w-full tw-mt-1 tw-mb-4 tw-default-form-field" type="text" id="name" name="name" placeholder="Your name..." value="">

                        <label class="tw-inline-block tw-w-full tw-text-left" for="email"><strong>Email address</strong> <em class="tw-opacity-70 tw-text-xs md:tw-float-right">Used for member communication.</em></label>
                        <input class="tw-pt-0 tw-inline-block tw-w-full tw-mt-1 tw-mb-4 tw-default-form-field" type="email" id="email" name="email" placeholder="Email address..." value="">

                        <label class="tw-inline-block tw-w-full tw-text-left" for="phone"><strong>Phone number</strong> <em class="tw-opacity-70 tw-text-xs md:tw-float-right">Used to validate you’re a human.</em></label>
                        <input class="tw-pt-0 tw-inline-block tw-w-full tw-mt-1 tw-mb-4 tw-default-form-field" type="tel" id="phone" name="phone" placeholder="Phone number..." pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" value="">

                        <label class="tw-inline-block tw-w-full tw-text-left" for="password"><strong>Password</strong> <em class="tw-opacity-70 tw-text-xs md:tw-float-right">Used to access your lessons.</em></label>
                        <input class="tw-pt-0 tw-inline-block tw-w-full tw-mt-1 tw-mb-4 tw-default-form-field" type="password" id="password" name="password" placeholder="Password..." value="">

                        <label class="tw-inline-block tw-w-full tw-text-left" for="password_confirmation"><strong>Password confirm</strong> <em class="tw-opacity-70 tw-text-xs md:tw-float-right">No typos.</em></label>
                        <input class="tw-pt-0 tw-inline-block tw-w-full tw-mt-1 tw-mb-4 tw-default-form-field" type="password" id="password_confirmation" name="password_confirmation" placeholder="Password Confirm..." value="">

                        <input name="button" type="submit" id="button" class="tw-text-white tw-bg-{{ $brand }} tw-leading-none tw-text-base tw-font-bold tw-border-0 tw-rounded-full tw-select-none tw-cursor-pointer tw-text-center tw-py-4 tw-px-16 tw-uppercase tw-font-roboto" value="Redeem Guest Pass"/>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
