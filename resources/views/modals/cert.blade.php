<!--~~~~~~~ Pop up order certificate ~~~~~~~-->
<div
    class="pop-up-order-certificate pop-up-main">
    <div
        class="pop-up__wrapper">

        <div
            class="pop-up">

            <div
                class="pop-up__close close-pop-up">
            </div>

            <div
                class="pop-up-order">


                <form
                    class="order__form">

                    <div
                        class="pop-up__title">
                        ОСТАВЬТЕ СВОИ ДАННЫЕ<br>
                        ДЛЯ ОФОРМЛЕНИЯ СЕРТИФИКАТА
                    </div>

                    <div
                        class="order__wrapper">
                        <div
                            class="form__container form__container_required">
                            <div
                                class="form__placeholder">
                                Представьтесь
                            </div>
                            <input
                                type="text"
                                class="form__text"
                                v-model="request.name"
                            />
                        </div>

                        <div
                            class="form__container form__container_required">
                            <div
                                class="form__placeholder">
                                Телефон
                            </div>
                            <input
                                type="text"
                                class="form__text"
                                placeholder="+7 (___) ___-__-__"
                                v-mask="'+7 (###) ###-##-##'"
                                v-model="request.phone"
                            />
                        </div>

                        <div
                            class="form__container">
                            <div
                                class="form__placeholder">
                                почта
                            </div>
                            <input
                                type="text"
                                class="form__text"
                                v-model="request.email"
                            />
                        </div>

                        <div
                            class="form__container">
                            <div
                                class="form__placeholder">
                                комментарии
                            </div>
                            <textarea v-model="request.comments"
                                class="form__textarea"
                                rows="0"
                                cols="0"></textarea>
                        </div>
                    </div>

                    <button @click="makeRequest('Сертификат')"
                        title="Оставить заявку"
                        class="button button_blue-dark">
                        Оставить заявку
                    </button>

                </form>

            </div>
        </div>

    </div>
</div>
