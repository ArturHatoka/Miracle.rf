<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Закрыть" class="close">X</a>
        <h2 class="modal-h2">Заказчик</h2>
        <div class="tour-inputs">
            <div class="inputs_block">
                <form id="tour--make_order" method="post" name="drop-box" action="../../site/include/send.php">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input">
                                <div class="label"><p>Выбрать</p></div>
                                <div class="select">
                                    <div class="slcter">
                                        <section class="main">
                                            <div class="wrapper-demo">
                                                <select id="ur" class="user-dd tour-about-select" size="1" name="user">
                                                    <option selected value="Физ. лицо">Физическое лицо</option>
                                                    <option value="Юр. лицо">Юридическое лицо</option>
                                                </select>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input">
                                <div class="label"><p>Заказчик*</p></div>
                                <input required="" type="text" name="name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input">
                                <div class="label"><p>Контактный телефон*</p></div>
                                <input required="" type="tel" name="phone" class="phone">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input">
                                <div class="label"><p>E-mail*</p></div>
                                <input required="" type="email" name="email">
                            </div>
                        </div>
                    </div>
                    <h2>Данные туриста</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input">
                                <div class="label"><p>Имя*</p></div>
                                <input required="" type="text" name="firstname">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input">
                                <div class="label"><p>Фамилия*</p></div>
                                <input required="" type="text" name="lastname">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input">
                                <div class="label"><p>День рождения</p></div>
                                <input class="birthday" type="text" name="bdate">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input">
                                <div class="label"><p>Номер паспорта</p></div>
                                <input type="text" name="ps">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input">
                                <div class="label"><p>Срок действия</p></div>
                                <input type="text" name="ps_date">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input">
                                <div class="label"><p>Дата тура</p></div>
                                <div class="select">
                                    <div class="slcter">
                                        <section class="main">
                                            <div class="wrapper-demo">

