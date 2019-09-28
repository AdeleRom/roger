<!-- MODALS -->
    <div class="modal fade" id="modal_comeback" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-block">
                        <form action="https://mail.mariyasolodar.com/add_subscriber.html" method="post">
                           <div class="for-title text-center">
                               <div class="min-title min">Подождите!</div>
                                <p class="big">Пройдите тест и узнайте, насколько вы <br class="d-none d-xl-inline"> управляете своей реальностью.</p>
                           </div>
                            <div class="txt text-center">
                                <p>Можно годами мечтать о счастливой жизни, но каждый день находиться под влиянием обстоятельств, винить их в том, что ваши желания не исполняются.</p>
                                <p>Или уделить 2 минуты, оценить свое настоящее и определить вектор развития, ведущий к желаемым результатам во всех сферах жизни.</p>
                            </div>
                            <div class="input-blocks">
                                <div class="ib">
                                    <input type="text" name="custom_mob" placeholder="Ваш телефон" required>
                                </div>
                                <div class="ib">
                                    <input type="email" name="email" placeholder="Ваш email" required>
                                </div>
                            </div>
                            <div class="under-order text-center">
                            <p>или</p>
                        </div>
                        <div class="sc-row">
                            <div class="row align-items-center justify-content-centerween">
                                <div class="col-12">
                                    <p class="text-center">Зарегистрируйтесь <br class="d-none d-sm-inline"> через мессенджеры:</p>
                                </div>
                                <div class="col-12">
                                    <div class="sc-inner-row">
                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                                <a href="https://telegram.me/puzzles_school_bot?start=5d7a2a74c2f9a3000f308e52" target="_blank">
                                                    <img src="<?php echo $baseurl; ?>/assets/images/telegram.svg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <a href="https://vk.com/app6767961_-184749584#gw0l8m_987h6w" target="_blank">
                                                    <img src="<?php echo $baseurl; ?>/assets/images/vk.svg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="order text-center">
                                <button type="button" class="white send">Пройти тест</button>
                            </div>
                            <div class="leave text-center">
                                <a href="#" data-dismiss="modal" aria-label="Close">Покинуть страницу</a>
                            </div>
							
							<input type="hidden" name="http_referer" value="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
							<input type="hidden" name="campaign_token" value="VG">
							<input type="hidden" name="thankyou_url" value="<?php echo $baseurl; ?>/test">
							<input type="hidden" name="start_day" value="0" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>