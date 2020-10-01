<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{

    // for char
    public function chart_chartist()
    {
        return view('backend.chart.chart_chartist');
    }
    public function chart_chartjs()
    {
        return view('backend.chart.chart_chartjs');
    }
    public function chart_flot()
    {
        return view('backend.chart.chart_flot');
    }
    public function chart_morris()
    {
        return view('backend.chart.chart_morris');
    }
    public function chart_peity()
    {
        return view('backend.chart.chart_peity');
    }
    public function chart_sparkline()
    {
        return view('backend.chart.chart_sparkline');
    }

    // for email
    public function email_compose()
    {
        return view('backend.email.email_compose');
    }
    public function email_inbox()
    {
        return view('backend.email.email_inbox');
    }
    public function email_read()
    {
        return view('backend.email.email_read');
    }

    // for form
    public function form_basic()
    {
        return view('backend.form.form_basic');
    }
    public function form_editor()
    {
        return view('backend.form.form_editor');
    }
    public function form_picker()
    {
        return view('backend.form.form_picker');
    }
    public function form_step()
    {
        return view('backend.form.form_step');
    }
    public function form_validation()
    {
        return view('backend.form.form_validation');
    }

    // for layout
    public function layout_blank()
    {
        return view('backend.layout.layout_blank');
    }
    public function layout_boxed()
    {
        return view('backend.layout.layout_boxed');
    }
    public function layout_compact_nav()
    {
        return view('backend.layout.layout_compact_nav');
    }
    public function layout_dark()
    {
        return view('backend.layout.layout_dark');
    }
    public function layout_fixed_header()
    {
        return view('backend.layout.layout_fixed_header');
    }
    public function layout_fixed_sidebar()
    {
        return view('backend.layout.layout_fixed_sidebar');
    }
    public function layout_horizontal()
    {
        return view('backend.layout.layout_horizontal');
    }
    public function layout_light()
    {
        return view('backend.layout.layout_light');
    }
    public function layout_one_column()
    {
        return view('backend.layout.layout_one_column');
    }
    public function layout_two_column()
    {
        return view('backend.layout.layout_two_column');
    }
    public function layout_vertical()
    {
        return view('backend.layout.layout_vertical');
    }
    public function layout_wide()
    {
        return view('backend.layout.layout_wide');
    }
    


    // for page
    public function page_login()
    {
        return view('backend.page.page_login');
    }
    public function page_lock()
    {
        return view('backend.page.page_lock');
    }
    public function page_register()
    {
        return view('backend.page.page_register');
    }
    public function page_error_503()
    {
        return view('backend.page.page_error_503');
    }
    public function page_error_500()
    {
        return view('backend.page.page_error_500');
    }
    public function page_error_404()
    {
        return view('backend.page.page_error_404');
    }
    public function page_error_403()
    {
        return view('backend.page.page_error_403');
    }
    public function page_error_400()
    {
        return view('backend.page.page_error_400');
    }
    
    // for uc
    public function uc_nestedable()
    {
        return view('backend.uc.uc_nestedable');
    }
    public function uc_noui_slider()
    {
        return view('backend.uc.uc_noui_slider');
    }
    public function uc_sweetalert()
    {
        return view('backend.uc.uc_sweetalert');
    }
    public function uc_toastr()
    {
        return view('backend.uc.uc_toastr');
    }

    // for ui
    public function ui_accordion()
    {
        return view('backend.ui.ui_accordion');
    }
    public function ui_alert()
    {
        return view('backend.ui.ui_alert');
    }
    public function ui_badge()
    {
        return view('backend.ui.ui_badge');
    }
    public function ui_button_group()
    {
        return view('backend.ui.ui_button_group');
    }
    public function ui_button()
    {
        return view('backend.ui.ui_button');
    }
    public function ui_cards()
    {
        return view('backend.ui.ui_cards');
    }
    public function ui_carousel()
    {
        return view('backend.ui.ui_carousel');
    }
    public function ui_dropdown()
    {
        return view('backend.ui.ui_dropdown');
    }
    public function ui_list_group()
    {
        return view('backend.ui.ui_list_group');
    }
    public function ui_media_object()
    {
        return view('backend.ui.ui_media_object');
    }
    public function ui_modal()
    {
        return view('backend.ui.ui_modal');
    }
    public function ui_pagination()
    {
        return view('backend.ui.ui_pagination');
    }
    public function ui_popover()
    {
        return view('backend.ui.ui_popover');
    }
    public function ui_progressbar()
    {
        return view('backend.ui.ui_progressbar');
    }
    public function ui_tab()
    {
        return view('backend.ui.ui_tab');
    }
    public function ui_typography()
    {
        return view('backend.ui.ui_typography');
    }



    public function app_profile()
    {
        return view('backend.app_profile');
    }
    public function app_calendar()
    {
        return view('backend.app_calendar');
    }
    public function blank()
    {
        return view('backend.blank');
    }
    public function table_basic()
    {
        return view('backend.table_basic');
    }
    public function table_datatable()
    {
        return view('backend.table_datatable');
    }
    public function widgets()
    {
        return view('backend.widgets');
    }
}
