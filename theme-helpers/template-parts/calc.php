<section>
    <div id="calculator" class="main-page__calculator calculator">
        <div class="calculator__container">
            <div class="calculator__content">
            <?php $subtitle = ($subtitle_arr[1] === null || !isset($subtitle_arr[1]) || $subtitle_arr[1] === '' ) ? $subtitle_arr[0].' '.$subtitle_arr[2] : $subtitle_arr[0] .' '. set_nowrap(get_declension(get_city($post->ID),$subtitle_arr[1])).' '.$subtitle_arr[2]; ?>
                <h2 class="text-center"><?= apply_filters( 'the_content', $subtitle ); ?></h2>            
                <p class="subtitle">Узнайте сумму к возврату, ежемесячный платеж и ставку.</p>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <form id="form-calculator" name="summ" action="#" method="POST"
                        class="calculator__form form-calculator">
                            <label class="d-block w-100 mb-4">
                                <div class="d-flex">
                                    <span class="align-self-center form-calculator__label-text">Необходимая сумма</span>
                                    <input id="calc_sum" type="text" value="" placeholder="1 000 000 ₽" name="calc_sum" class="ml-auto form-calculator__input calc_sum_res">
                                </div>
                                <div id="calc_sum_range"></div>
                                <p class="form-calculator__price under-input-wrapper">
                                    <span class="form-calculator__from">30 000</span>
                                    <span class="form-calculator__center form-calc-desc">1 000 000</span>
                                    <span class="form-calculator__to under-input-2">10 000 000</span>
                                </p>
                            </label>

                            <label class="d-block w-100 mb-4">
                                <div class="d-flex">
                                    <span class="align-self-center form-calculator__label-text">Срок займа</span>
                                    <input id="calc_term" type="text" name="calc_term" value=""  placeholder="12 месяцев" class="ml-auto form-calculator__input calc_term_custom">
                                </div>
                                    <div id="calc_month_range"></div>
                                <p class="form-calculator__price under-input-wrapper">
                                    <span class="form-calculator__from">1</span>
                                    <span class="form-calculator__center">18</span>
                                    <span class="form-calculator__to under-input-2">36</span>
                                </p>
                            </label>
                            <label class="d-block w-100 mb-4">
                                <div class="d-flex">
                                    <span class="align-self-center form-calculator__label-text form-calculator__label-text-2">Ежемесячный платеж</span>
                                    <input id="calc_payment_pay" type="text" name="calc_payment" value="" placeholder="97 487 ₽" class="ml-auto form-calculator__input calc_payment_custom">
                                </div>
                                    <div id="calc_pay_range2"></div>
                            </label>
                        </form>
                    </div>

                    <div class="col-12 col-lg-6 px-0 px-lg-3">
                        <div class="form-output mt-3">
                            <div class="form-output__content">
                                <div class="form-info-wrapper">
                                    <div class="form-line">
                                        <input id="calc_rate_range" type="hidden" value="2.5" name="calc_rate_range" class="calc-range">
                                        <div class="form-line-left form-line-left-1 form-line-left-3">Ваша ставка</div>
                                        <div class="form-line-right form-line-right-1">
                                            <span class="procent form-stv">2 %</span> <span class="month">в месяц</span>
                                        </div>
                                    </div>
                                    <div class="form-line mt-3">
                                        <div class="form-line-left form-line-left-1">Сумма процентов</div>
                                        <div class="form-line-right form-line-right-1">
                                            <span class="sum-procent" id="calc_overpayment">169 846 ₽</span>
                                        </div>
                                    </div>
                                    <div class="form-line mt-3">
                                        <div class="form-line-left form-line-left-1">Сумма к возврату</div>
                                        <div class="form-line-right form-line-right-1">
                                            <span class="sum-return" id="calc_payments_sum">1 169 846 ₽</span>
                                        </div>
                                    </div>
                                    <?= do_shortcode('[contact-form-7 id="7379"]');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>