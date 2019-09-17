@extends('admin.index')

@section('contenido_admin')
    <section>
        <div class="tab-pane fade in" id="carrousel">
        <div class="tabs-wrp account-settings brd-rd5">
            <h4 itemprop="headline">CLIENTES REGISTRADOS</h4>
            <div class="account-settings-inner">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <div class="profile-info text-center">
                            <div class="profile-thumb brd-rd50">
                                <img id="profile-display"
                                    src="images/resource/profile-img1.jpg"
                                    alt="profile-img1.jpg" itemprop="image">
                            </div>
                            <div class="profile-img-upload-btn">
                                <label
                                    class="fileContainer brd-rd5 yellow-bg">
                                    VER PERFIL
                                    <input id="profile-upload"
                                        type="file" />
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <div class="profile-info text-center">
                            <div class="profile-thumb brd-rd50">
                                <img id="profile-display"
                                    src="images/resource/profile-img1.jpg"
                                    alt="profile-img1.jpg" itemprop="image">
                            </div>
                            <div class="profile-img-upload-btn">
                                <label
                                    class="fileContainer brd-rd5 yellow-bg">
                                    VER PERFIL
                                    <input id="profile-upload"
                                        type="file" />
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <div class="profile-info text-center">
                            <div class="profile-thumb brd-rd50">
                                <img id="profile-display"
                                    src="images/resource/profile-img1.jpg"
                                    alt="profile-img1.jpg" itemprop="image">
                            </div>
                            <div class="profile-img-upload-btn">
                                <label
                                    class="fileContainer brd-rd5 yellow-bg">
                                    VER PERFIL
                                    <input id="profile-upload"
                                        type="file" />
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </form>
        </div>
    </div>
</section>
@endsection