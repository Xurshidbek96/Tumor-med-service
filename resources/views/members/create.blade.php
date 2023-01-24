@extends('layouts.layout')

@section('content')
    <div class="content">
        <h2 class="title">Ro'yhatga olish</h2>

        <div class="forma">
            <form action="{{ route('members.store') }}" method="POST">
                @csrf
                <div class="user__value">
                    <div class="input-group">
                        <label class="label">F.I.SH</label>
                        <input class="input--style-4" type="text" name="name" value="{{ old('name') }}"/>
                    </div>
                    <div class="input-group">
                        <label class="label">Telefon raqami</label>
                        <input type="text" class="input--style-4" name="phone" value="{{ old('phone') }}"/>
                    </div>
                    <div class="input-group">
                        <label class="label">Tug'ilgan sanasi</label>
                        <div class="input-group-icon">
                            <input class="input--style-4 js-datepicker" type="date" name="date" value="{{ old('date') }}
                                placeholder="oy/kun/yil" />
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="label">Jinsi</label>
                        <div class="p-t-10">
                            <label class="radio-container m-r-45">Erkak
                                <input type="radio" checked="checked" name="gender"  value="erkak"/>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container">Ayol
                                <input type="radio" name="gender"  value="ayol"/>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>

                    <div class="alone_select input-group">
                        <label class="label">Yashash Manzili: <b>Viloyat</b></label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="region" id="parent_select" value="{{ old('region') }}">
                                <option disabled="disabled" selected="selected">
                                    Viloyatni tanlang
                                </option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                    <div class="alone_select input-group">
                        <label class="label">Yashash Manzili: <b>Tuman yoki Shahar</b></label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="city" id="child_select" value="{{ old('city') }}">
                                <option disabled="disabled" selected="selected">
                                    Tuman yoshi shaharni tanlang
                                </option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                    <div class="alone_select input-group">
                        <label class="label">Tashhis : <b> Tekshirilayotgan kasallik</b></label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="type_sickness" value="{{ old('type_sickness') }}">
                                <option disabled="disabled" selected="selected">
                                    Kassalik turini tanlang
                                </option>
                                <option>TORCH</option>
                                <option>Covid-19</option>
                                <option>Omikron</option>
                                <option>Grip</option>
                                <option>Gepatit A</option>
                                <option>Gepatit B</option>
                                <option>Gepatit C</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                    <div class="alone_select input-group">
                        <div class="input-group">
                            <label class="label">Kassalik haqida</label>
                            <input class="input--style-4" type="text" name="sickness" value="{{ old('sickness') }}"/>
                        </div>
                    </div>
                </div>

                <div class="numbers__value">
                    <div class="input-group">
                        <label class="label">ПЦР натижаси</label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="psr" class="input--style-4"  value="{{ old('psr') }}">
                                <option disabled="disabled" selected="selected">
                                    Tanlang
                                </option>
                                <option value="+">Musbat (+)</option>
                                <option value="-">Manfiy (-)</option>

                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="label">АЛТ </label>
                        <input class="input--style-4" type="text" name="alt"  value="{{ old('alt') }}"/>
                    </div>
                    <div class="input-group">
                        <label class="label">АСТ </label>
                        <input class="input--style-4" type="number" name="ast" value="{{ old('ast') }}"/>
                    </div>
                    <div class="input-group">
                        <label class="label">Биллирубин </label>
                        <input class="input--style-4" type="number" name="billirubin" value="{{ old('billirubin') }}"/>
                    </div>
                    <div class="input-group">
                        <label class="label">Ишқорий фосфотаза </label>
                        <input class="input--style-4" type="number" name="ishqor" value="{{ old('ishqor') }}"/>
                    </div>
                    <div class="input-group">
                        <label class="label">Тимол сурмаси </label>
                        <input class="input--style-4" type="number" name="surma" value="{{ old('surma') }}"/>
                    </div>
                    <div class="input-group">
                        <label class="label">IgG </label>
                        <input class="input--style-4" type="number" name="igg" value="{{ old('igg') }}"/>
                    </div>
                    <div class="input-group">
                        <label class="label">IgM </label>
                        <input class="input--style-4" type="number" name="igm" value="{{ old('igm') }}"/>
                    </div>
                </div>
                <input class="get__register" type="submit" value="Ro'yhatga olish">
            </form>
        </div>
    </div>
@endsection
