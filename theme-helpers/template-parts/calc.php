<div id="calculator" class="main-page__calculator calculator">
    <div class="calculator__container">
        <div class="calculator__content">
        <?php $subtitle = ($subtitle_arr[1] === null || !isset($subtitle_arr[1]) || $subtitle_arr[1] === '' ) ? $subtitle_arr[0].' '.$subtitle_arr[2] : $subtitle_arr[0] . ' ' . get_declension(get_city($post->ID),$subtitle_arr[1]).' '.$subtitle_arr[2]; ?>
            <h2 class="text-center"><?= apply_filters( 'the_content', $subtitle ); ?></h2>
            <!-- <p class="calculator__desc subtitle text-center">Рассчитайте сумму к возврату, ставку и ежемесячный платёж.</p>
            <ul class="calculator__form-list">
                <li class="calculator__form-item">
                    <input type="radio" name="summ-form" id="summ-summ" checked="true" class="visually-hidden toggle-summ-form">
                   
                    <div class="calculator__content-form">
                    <form id="form-calculator" name="summ" action="#" method="POST"
                              class="calculator__form form-calculator">
                            <label class="form-calculator__label  form-calculator__label-1"> <span class="form-calculator__label-text form-calculator__label-text-1">Необходимая сумма</span>
                                <input id="calc_sum" type="text" value="300 000 ₽" name="calc_sum" class="form-calculator__input calc_sum_res form-calculator__input--summ-loan">
                                <div id="calc_sum_range"></div>
                                <p class="form-calculator__price under-input-wrapper custom-calculator-output custom-calculator-output-2"><span
                                        class="form-calculator__from">30 000</span><span
                                        class="form-calculator__center form-calc-desc">1 000 000</span><span
                                        class="form-calculator__to under-input-2">10 000 000</span></p>
                            </label>
                            <label class="form-calculator__label form-calculator__label-m  form-calculator__label-2"><span class="form-calculator__label-text">Срок займа</span>
                                <input id="calc_term" type="text" name="calc_term" value="12 месяцев"  placeholder="24 месяца"
                                       class="form-calculator__input form-calculator__input--summ-loan calc_term_custom">
                                <div id="calc_month_range"></div>
                                <p class="form-calculator__price under-input-wrapper"><span
                                        class="form-calculator__from">1</span><span class="form-calculator__center">18</span><span
                                        class="form-calculator__to under-input-2">36</span></p>
                            </label>
                            <label class="form-calculator__label form-calculator__label-3"><span class="form-calculator__label-text form-calculator__label-text-2">Ежемесячный платеж</span>
                                <input id="calc_payment_pay" type="text" name="calc_payment" value="264 355 ₽" class="form-calculator__input form-calculator__input--summ-loan calc_payment_custom">
                                <div id="calc_pay_range2"></div>
                            </label>
                        </form>
                        <div class="form-calculator__output form-output">
                            <div class="form-output__content">
                            <div class="form-info-wrapper">
                                <div class="form-line">
                                    <input id="calc_rate_range" type="hidden" value="2.5" name="calc_rate_range" class="calc-range">
                                    <div class="form-line-left form-line-left-1 form-line-left-3">Ваша ставка</div>
                                    <div class="form-line-right form-line-right-1">
                                        <span class="month">в месяц</span><span class="procent form-stv">2,5%</span>
                                    </div>
                                </div>
                                <div class="form-line">
                                    <div class="form-line-left form-line-left-1">Сумма процентов</div>
                                    <div class="form-line-right form-line-right-1">
                                        <span class="sum-procent" id="calc_overpayment">648 000 ₽</span>
                                    </div>
                                </div>
                                <div class="form-line">
                                    <div class="form-line-left form-line-left-1">Сумма к возврату</div>
                                    <div class="form-line-right form-line-right-1">
                                        <span class="sum-return" id="calc_payments_sum">2 448 000 ₽</span>
                                    </div>
                                </div>
                                <div class="form-line">
                                    <div class="form-line-left form-line-left-1  form-line-left-11">
                                        <input type="tel" name="phone" class="form-control form-control-phone" placeholder="+7 (___) ___-__-__">
                                    </div>
                                    <div class="form-line-right form-line-right-2">
                                        <button class="new-button" type="button">Получить одобрение</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-dop-info">
                        </div>
                    </div>
                </div></li>
            </ul> -->

            
            <p class="subtitle text-center">Рассчитайте сумму к возврату, ставку и ежемесячный платёж.</p>    
            <div class="row">
                <div class="col-12 col-lg-6">
                    <form id="form-calculator" name="summ" action="#" method="POST"
                    class="calculator__form form-calculator">
                        <label class="d-block w-100 mb-4">
                            <div class="d-flex">
                                <span class="align-self-center form-calculator__label-text">Необходимая сумма</span>
                                <input id="calc_sum" type="text" value="" placeholder="300 000 ₽" name="calc_sum" class="ml-auto form-calculator__input calc_sum_res">
                            </div>
                            <div id="calc_sum_range"></div>
                            <p class="form-calculator__price under-input-wrapper custom-calculator-output custom-calculator-output-2">
                                <span class="form-calculator__from">30 000</span>
                                <span class="form-calculator__center form-calc-desc">1 000 000</span>
                                <span class="form-calculator__to under-input-2">10 000 000</span>
                            </p>
                        </label>

                        <label class="d-block w-100 mb-4">
                            <div class="d-flex">
                                <span class="align-self-center form-calculator__label-text">Срок займа</span>
                                <input id="calc_term" type="text" name="calc_term" value=""  placeholder="24 месяца" class="ml-auto form-calculator__input calc_term_custom">
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
                                <input id="calc_payment_pay" type="text" name="calc_payment" value="" placeholder="20 000 ₽" class="ml-auto form-calculator__input calc_payment_custom">
                            </div>
                                <div id="calc_pay_range2"></div>
                        </label>
                    </form>
                </div>



                <div class="col-12 col-lg-6">
                    <div class="form-calculator__output form-output mt-3">
                        <div class="form-output__content">
                            <div class="form-info-wrapper">
                                <div class="form-line">
                                    <input id="calc_rate_range" type="hidden" value="2.5" name="calc_rate_range" class="calc-range">
                                    <div class="form-line-left form-line-left-1 form-line-left-3">Ваша ставка</div>
                                    <div class="form-line-right form-line-right-1">
                                        <span class="month">в месяц</span><span class="procent form-stv">2,5%</span>
                                    </div>
                                </div>
                                <div class="form-line">
                                    <div class="form-line-left form-line-left-1">Сумма процентов</div>
                                    <div class="form-line-right form-line-right-1">
                                        <span class="sum-procent" id="calc_overpayment">648 000 ₽</span>
                                    </div>
                                </div>
                                <div class="form-line">
                                    <div class="form-line-left form-line-left-1">Сумма к возврату</div>
                                    <div class="form-line-right form-line-right-1">
                                        <span class="sum-return" id="calc_payments_sum">2 448 000 ₽</span>
                                    </div>
                                </div>
                                <div class="form-line">
                                    <div class="form-line-left form-line-left-1  form-line-left-11">
                                        <input type="tel" name="phone" class="form-control form-control-phone" placeholder="+7 (___) ___-__-__">
                                    </div>
                                    <div class="form-line-right form-line-right-2">
                                        <button class="new-button" type="button">Получить одобрение</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php get_template_part('theme-helpers/template-parts/form','calc'); ?>