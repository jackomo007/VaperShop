@extends('layouts.app')

@section('content')
    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">Inicio</a></li>
                <li class="breadcrumb-item active">Sesion Administrador</li>
            </ol>
        </div>
    </div>

    <section>
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="dashboard-tabs-wrapper">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="profile-sidebar brd-rd5 wow fadeIn" data-wow-delay="0.2s">
                                <div class="profile-sidebar-inner brd-rd5">
                                    <div class="user-info red-bg">
                                        <img class="brd-rd50"
                                            src="images/resource/user-avatar.jpg"
                                            alt="user-avatar.jpg" itemprop="image">
                                        <div class="user-info-inner">
                                            <h5 itemprop="headline"><a href="#" title=""
                                                    itemprop="url">ADMINISTRADOR</a></h5>
                                            <span><a href="#" title="" itemprop="url">{{ $user->email }}</a></span>
                                            <a class="brd-rd3 sign-out-btn yellow-bg" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="" itemprop="url">
                                                <i class="fa fa-sign-out"></i> CERRAR SESIÓN</a>
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#categorias" data-toggle="tab"><i class="fa fa-superpowers"></i>CATEGORIAS</a></li>
                                        <li><a href="#sub-categorias" data-toggle="tab"><i class="fa fa-superpowers"></i> SUBCATEGORÍAS</a></li>
                                        <li><a href="#productos" data-toggle="tab"><i class="fa fa-shopping-basket"></i>PRODUCTOS</a></li>
                                        <li><a href="#clientes" data-toggle="tab"><i class="fa fa-user-circle-o"></i>CLIENTES</a></li>
                                        <li><a href="#otros" data-toggle="tab"><i class="fa fa-cog"></i>OTRAS CONFIGURACIONES</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-lg-8">
                            <div class="tab-content">

                                <div class="tab-pane fade in active" id="categorias">
                                    <div class="dashboard-wrapper brd-rd5" style="padding:0px">
                                        <div class="welcome-note yellow-bg brd-rd5">
                                            <h4 itemprop="headline">BIENVENIDO ADMINISTRADOR</h4>
                                            <p itemprop="description">Administra tus recursos aquí</p>
                                            <img src="images/resource/welcome-note-img.png"
                                                alt="welcome-note-img.png" itemprop="image">
                                            <a class="remove-noti" href="#" title="" itemprop="url"><img
                                                    src="images/close-icon.png"
                                                    alt="close-icon.png" itemprop="image"></a>
                                        </div>
                                        <div class="dashboard-title">
                                            <h4 itemprop="headline">REGISTRA TU CATEGORÍA</h4>
                                        </div>
                                        {{-- @if (\Session::get('success'))
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <p style="margin-left: 30%;">{{ \Session::get('success') }}</p>
                                            </div>
                                        @endif
                                        <form class="restaurant-info-form brd-rd5" method="POST" action="/categoria">
                                            @csrf
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <label>Nombre de Categoría<sup>*</sup></label>
                                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Descripción de la Categoría</label>
                                                    <input id="description" type="text" class="brd-rd3 @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" autofocus>
                                                    @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <div class="step-buttons">
                                                        <button type="submit" class="btn btn-danger">Agregar Categoria</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form> --}}

                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="sub-categorias">
                                    <div class="tabs-wrp brd-rd5">
                                        <div class="dashboard-title">
                                            <h4 itemprop="headline">EDITA TU CATEGORÍA</h4>
                                        </div>
                                        <form class="restaurant-info-form brd-rd5">
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <label>Nombre de Categoría<sup>*</sup></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Agregar Subcategoría</label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Descripción de la Categoría</label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <div class="step-buttons">
                                                        <a class="brd-rd3 red-bg" href="#" title=""
                                                            itemprop="url">Guardar Cambio</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="productos">
                                    <div class="tabs-wrp brd-rd5">
                                        <h4 itemprop="headline">AGREGAR PRODUCTOS</h4>
                                        <form class="restaurant-info-form brd-rd5">
                                            <div class="row mrg20">
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <label>Nombre de Producto<sup>*</sup></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <label>Precio<sup>*</sup></label>
                                                    <input class="brd-rd3" type="text">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Categoría del Producto <sup>*</sup></label>
                                                    <div class="select-wrp">
                                                        <select>
                                                            <option>Lácteos</option>
                                                            <option>Huevos</option>
                                                            <option>Abarrotes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Subcategoría <sup>*</sup></label>
                                                    <div class="select-wrp">
                                                        <select>
                                                            <option>Queso</option>
                                                            <option>Leche en polvo</option>
                                                            <option>Leche Líquida</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <label>Descripción</label>
                                                    <input class="brd-rd3" type="email">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <div class="step-buttons">
                                                        <a class="brd-rd3 red-bg" href="#" title=""
                                                            itemprop="url">Agregar Producto</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!-- Review List -->
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="clientes">
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

                                <div class="tab-pane fade" id="otros">
                                    <div class="tabs-wrp account-settings brd-rd5">
                                        <h4 itemprop="headline">VARIAS FUNCIONALIDADES</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
