<?php

/* faktury/new.html.twig */
class __TwigTemplate_b290dd86057320f90e20bee7829ab0e84b1ce4d3ebe8a466070132289b807e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "faktury/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4fc17dfc591575a1aa23e2b4544dd155e683ba3a8b4eecb9d22a33a6010de50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4fc17dfc591575a1aa23e2b4544dd155e683ba3a8b4eecb9d22a33a6010de50->enter($__internal_d4fc17dfc591575a1aa23e2b4544dd155e683ba3a8b4eecb9d22a33a6010de50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "faktury/new.html.twig"));

        $__internal_12d74a944add811fcd83681106e7fa2f0de4c28ff888d9388b16d42018cfa921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d74a944add811fcd83681106e7fa2f0de4c28ff888d9388b16d42018cfa921->enter($__internal_12d74a944add811fcd83681106e7fa2f0de4c28ff888d9388b16d42018cfa921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "faktury/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4fc17dfc591575a1aa23e2b4544dd155e683ba3a8b4eecb9d22a33a6010de50->leave($__internal_d4fc17dfc591575a1aa23e2b4544dd155e683ba3a8b4eecb9d22a33a6010de50_prof);

        
        $__internal_12d74a944add811fcd83681106e7fa2f0de4c28ff888d9388b16d42018cfa921->leave($__internal_12d74a944add811fcd83681106e7fa2f0de4c28ff888d9388b16d42018cfa921_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_61b4e61cc62a4019dc39a0ae00f3964f59871d2d3ad2fbc2c480bbc4efd8fc63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b4e61cc62a4019dc39a0ae00f3964f59871d2d3ad2fbc2c480bbc4efd8fc63->enter($__internal_61b4e61cc62a4019dc39a0ae00f3964f59871d2d3ad2fbc2c480bbc4efd8fc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f342d6168ac6b63c87ef8723334407214c8477bfb6174943638fa36dda26d546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f342d6168ac6b63c87ef8723334407214c8477bfb6174943638fa36dda26d546->enter($__internal_f342d6168ac6b63c87ef8723334407214c8477bfb6174943638fa36dda26d546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2>W TEJ SEKCJI NIE UMIESZCZAMY FAKTUR PROFORMA! FAKTURA PROFORMA NIE JEST DOKUMENTEM KSIĘGOWYM! PROSZĘ UPLOADOWAĆ TYLKO FAKTURY!</h2>
    <h1>Nowa faktura</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    <div id=\"rodzaj\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rodzaj", array()), 'label');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rodzaj", array()), 'errors');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rodzaj", array()), 'widget');
        echo "
    </div>

    <div id=\"firma\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "naszaFirmaId", array()), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "naszaFirmaId", array()), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "naszaFirmaId", array()), 'widget');
        echo "
    </div>

    <div id=\"kontrahent_nip\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentNip", array()), 'label');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentNip", array()), 'errors');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentNip", array()), 'widget');
        echo "
    </div>

    <div id=\"kontrahent_nazwa\">
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentNazwa", array()), 'label');
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentNazwa", array()), 'errors');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentNazwa", array()), 'widget');
        echo "
    </div>

    <div id=\"kontrahent_adres\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentAdres", array()), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentAdres", array()), 'errors');
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentAdres", array()), 'widget');
        echo "
    </div>

    <div id=\"kontrahent_miasto\">
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentMiasto", array()), 'label');
        echo "
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentMiasto", array()), 'errors');
        echo "
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentMiasto", array()), 'widget');
        echo "
    </div>

    <div id=\"kontrahent_kod_pocztowy\">
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentKodPocztowy", array()), 'label');
        echo "
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentKodPocztowy", array()), 'errors');
        echo "
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentKodPocztowy", array()), 'widget');
        echo "
    </div>

    <div id=\"numer\">
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numer", array()), 'label');
        echo "
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numer", array()), 'errors');
        echo "
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numer", array()), 'widget');
        echo "
    </div>

    <div id=\"data_wystawienia\">
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dataWystawienia", array()), 'label');
        echo "
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dataWystawienia", array()), 'errors');
        echo "
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dataWystawienia", array()), 'widget');
        echo "
    </div>

    <div id=\"kontrahent_nr_konta\">
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentNrKonta", array()), 'label');
        echo "
        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentNrKonta", array()), 'errors');
        echo "
        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kontrahentNrKonta", array()), 'widget');
        echo "
    </div>

    <div id=\"kwota_netto\">
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kwotaNetto", array()), 'label');
        echo "
        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kwotaNetto", array()), 'errors');
        echo "
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kwotaNetto", array()), 'widget');
        echo "
    </div>

    <div id=\"kwota_brutto\">
        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kwotaBrutto", array()), 'label');
        echo "
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kwotaBrutto", array()), 'errors');
        echo "
        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kwotaBrutto", array()), 'widget');
        echo "
    </div>

    <div id=\"kwota_vat\">
        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kwotaVat", array()), 'label');
        echo "
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kwotaVat", array()), 'errors');
        echo "
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kwotaVat", array()), 'widget');
        echo "
    </div>

    <div id=\"data_wystawienia\">
        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "opis", array()), 'label');
        echo "
        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "opis", array()), 'errors');
        echo "
        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "opis", array()), 'widget');
        echo "
    </div>

    <div id=\"data_wystawienia\">
        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formaPlatnosci", array()), 'label');
        echo "
        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formaPlatnosci", array()), 'errors');
        echo "
        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formaPlatnosci", array()), 'widget');
        echo "
    </div>

    <div id=\"data_wystawienia\">
        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plikSkanFaktury", array()), 'label');
        echo "
        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plikSkanFaktury", array()), 'errors');
        echo "
        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plikSkanFaktury", array()), 'widget');
        echo "
    </div>

    <div id=\"box_checkbox\">
        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "czyZaplacono", array()), 'label');
        echo "
        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "czyZaplacono", array()), 'errors');
        echo "
        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "czyZaplacono", array()), 'widget');
        echo "
    </div>

    <div id=\"paid\">
        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "terminPlatnosci", array()), 'label');
        echo "
        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "terminPlatnosci", array()), 'errors');
        echo "
        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "terminPlatnosci", array()), 'widget');
        echo "
    </div>

    <div id=\"projekty\">
        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "projekt", array()), 'label');
        echo "
        ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "projekt", array()), 'errors');
        echo "
        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "projekt", array()), 'widget');
        echo "
    </div>

    <input type=\"submit\" value=\"Dodaj\"/>
    ";
        // line 123
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_nieprzypisane");
        echo "\">Operacje</a>
        </li>
    </ul>

    <script>

        jQuery(document).ready(function (\$) {

            \$(document).on('change', '#rodzaj', function() {

                var rodzajFaktury = \$('select option:selected').val();

                if (rodzajFaktury == 2) {
                    \$('#kwota_netto').hide();
                    \$('#kwota_vat').hide();
                    \$('#appbundle_faktury_kwotaNetto').prop('required',false);
                    \$('#appbundle_faktury_kwotaVat').prop('required',false);
                }else{
                    \$('#kwota_netto').show();
                    \$('#kwota_vat').show();
                }




                    // half_product_select_value = this.value;
                    // half_product_select_name = \$(this).find('option:selected').text();
                    // \$(what_box).find('input.half_product_add').attr(\"disabled\", false);
                    // console.log(\"DEBUG: SELECTED VALUE: \" + half_product_select_value + \" named: \" + half_product_select_name);


            });

            \$('#appbundle_faktury_terminPlatnosci_date_year').prop('required',true);
            \$('#appbundle_faktury_terminPlatnosci_date_month').prop('required',true);
            \$('#appbundle_faktury_terminPlatnosci_date_day').prop('required',true);
            \$('#appbundle_faktury_terminPlatnosci_time_hour').prop('required',true);
            \$('#appbundle_faktury_terminPlatnosci_time_minute').prop('required',true);

            \$(document).on('click', '#appbundle_faktury_czyZaplacono', function (e) {
                if(\$(this).is(\":checked\")){
                    \$('#paid').hide();
                    \$('#appbundle_faktury_terminPlatnosci_date_year').prop('required',false);
                    \$('#appbundle_faktury_terminPlatnosci_date_month').prop('required',false);
                    \$('#appbundle_faktury_terminPlatnosci_date_day').prop('required',false);
                    \$('#appbundle_faktury_terminPlatnosci_time_hour').prop('required',false);
                    \$('#appbundle_faktury_terminPlatnosci_time_minute').prop('required',false);
                }

                else if(\$(this).is(\":not(:checked)\")){
                    \$('#paid').show();
                    \$('#appbundle_faktury_terminPlatnosci_date_year').prop('required',true);
                    \$('#appbundle_faktury_terminPlatnosci_date_month').prop('required',true);
                    \$('#appbundle_faktury_terminPlatnosci_date_day').prop('required',true);
                    \$('#appbundle_faktury_terminPlatnosci_time_hour').prop('required',true);
                    \$('#appbundle_faktury_terminPlatnosci_time_minute').prop('required',true);
                }
            });


            \$(document).on('blur', '#appbundle_faktury_kontrahentNip', function (e) {
                e.preventDefault();
                let value = \$(this).val();



                \$.ajax({
                    url: '";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faktury_stat_gov_nip");
        echo "',
                    type: \"POST\",
                    dataType: \"json\",
                    data: {
                        nip: value
                    },
                    async: true,
                }).done(function (data) {
                    console.log(data);
                    if (data.msg == 'OK' && data.response) {
                        console.log(data.response);
                        // alert('submit');
                        // that.off('submit').submit();

                        \$('#appbundle_faktury_kontrahentNazwa').val(data.response.praw_nazwa);
                        \$('#appbundle_faktury_kontrahentAdres').val(data.response.praw_adSiedzUlica_Nazwa+' '+data.response.praw_adSiedzNumerNieruchomosci+' '+data.response.praw_adSiedzNumerLokalu);
                        \$('#appbundle_faktury_kontrahentMiasto').val(data.response.praw_adSiedzMiejscowosc_Nazwa);
                        \$('#appbundle_faktury_kontrahentKodPocztowy').val(data.response.praw_adSiedzKodPocztowy);

                    } else {
                        // alert(data.msg);
                        // \$('#call_return_info').html('');
                    }
                }).fail(function () {
                    console.warn(\"FAIL FAIL\");
                    // \$('#call_return_info').html('FAIL! FAIL');
                });

                return true;

                // console.warn(keywords);
                // that.off('submit').submit();

            });

        });
    </script>
";
        
        $__internal_f342d6168ac6b63c87ef8723334407214c8477bfb6174943638fa36dda26d546->leave($__internal_f342d6168ac6b63c87ef8723334407214c8477bfb6174943638fa36dda26d546_prof);

        
        $__internal_61b4e61cc62a4019dc39a0ae00f3964f59871d2d3ad2fbc2c480bbc4efd8fc63->leave($__internal_61b4e61cc62a4019dc39a0ae00f3964f59871d2d3ad2fbc2c480bbc4efd8fc63_prof);

    }

    public function getTemplateName()
    {
        return "faktury/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 194,  352 => 127,  345 => 123,  338 => 119,  334 => 118,  330 => 117,  323 => 113,  319 => 112,  315 => 111,  308 => 107,  304 => 106,  300 => 105,  293 => 101,  289 => 100,  285 => 99,  278 => 95,  274 => 94,  270 => 93,  263 => 89,  259 => 88,  255 => 87,  248 => 83,  244 => 82,  240 => 81,  233 => 77,  229 => 76,  225 => 75,  218 => 71,  214 => 70,  210 => 69,  203 => 65,  199 => 64,  195 => 63,  188 => 59,  184 => 58,  180 => 57,  173 => 53,  169 => 52,  165 => 51,  158 => 47,  154 => 46,  150 => 45,  143 => 41,  139 => 40,  135 => 39,  128 => 35,  124 => 34,  120 => 33,  113 => 29,  109 => 28,  105 => 27,  98 => 23,  94 => 22,  90 => 21,  83 => 17,  79 => 16,  75 => 15,  68 => 11,  64 => 10,  60 => 9,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <h2>W TEJ SEKCJI NIE UMIESZCZAMY FAKTUR PROFORMA! FAKTURA PROFORMA NIE JEST DOKUMENTEM KSIĘGOWYM! PROSZĘ UPLOADOWAĆ TYLKO FAKTURY!</h2>
    <h1>Nowa faktura</h1>

    {{ form_start(form) }}

    <div id=\"rodzaj\">
        {{ form_label(form.rodzaj) }}
        {{ form_errors(form.rodzaj) }}
        {{ form_widget(form.rodzaj) }}
    </div>

    <div id=\"firma\">
        {{ form_label(form.naszaFirmaId) }}
        {{ form_errors(form.naszaFirmaId) }}
        {{ form_widget(form.naszaFirmaId) }}
    </div>

    <div id=\"kontrahent_nip\">
        {{ form_label(form.kontrahentNip) }}
        {{ form_errors(form.kontrahentNip) }}
        {{ form_widget(form.kontrahentNip) }}
    </div>

    <div id=\"kontrahent_nazwa\">
        {{ form_label(form.kontrahentNazwa) }}
        {{ form_errors(form.kontrahentNazwa) }}
        {{ form_widget(form.kontrahentNazwa) }}
    </div>

    <div id=\"kontrahent_adres\">
        {{ form_label(form.kontrahentAdres) }}
        {{ form_errors(form.kontrahentAdres) }}
        {{ form_widget(form.kontrahentAdres) }}
    </div>

    <div id=\"kontrahent_miasto\">
        {{ form_label(form.kontrahentMiasto) }}
        {{ form_errors(form.kontrahentMiasto) }}
        {{ form_widget(form.kontrahentMiasto) }}
    </div>

    <div id=\"kontrahent_kod_pocztowy\">
        {{ form_label(form.kontrahentKodPocztowy) }}
        {{ form_errors(form.kontrahentKodPocztowy) }}
        {{ form_widget(form.kontrahentKodPocztowy) }}
    </div>

    <div id=\"numer\">
        {{ form_label(form.numer) }}
        {{ form_errors(form.numer) }}
        {{ form_widget(form.numer) }}
    </div>

    <div id=\"data_wystawienia\">
        {{ form_label(form.dataWystawienia) }}
        {{ form_errors(form.dataWystawienia) }}
        {{ form_widget(form.dataWystawienia) }}
    </div>

    <div id=\"kontrahent_nr_konta\">
        {{ form_label(form.kontrahentNrKonta) }}
        {{ form_errors(form.kontrahentNrKonta) }}
        {{ form_widget(form.kontrahentNrKonta) }}
    </div>

    <div id=\"kwota_netto\">
        {{ form_label(form.kwotaNetto) }}
        {{ form_errors(form.kwotaNetto) }}
        {{ form_widget(form.kwotaNetto) }}
    </div>

    <div id=\"kwota_brutto\">
        {{ form_label(form.kwotaBrutto) }}
        {{ form_errors(form.kwotaBrutto) }}
        {{ form_widget(form.kwotaBrutto) }}
    </div>

    <div id=\"kwota_vat\">
        {{ form_label(form.kwotaVat) }}
        {{ form_errors(form.kwotaVat) }}
        {{ form_widget(form.kwotaVat) }}
    </div>

    <div id=\"data_wystawienia\">
        {{ form_label(form.opis) }}
        {{ form_errors(form.opis) }}
        {{ form_widget(form.opis) }}
    </div>

    <div id=\"data_wystawienia\">
        {{ form_label(form.formaPlatnosci) }}
        {{ form_errors(form.formaPlatnosci) }}
        {{ form_widget(form.formaPlatnosci) }}
    </div>

    <div id=\"data_wystawienia\">
        {{ form_label(form.plikSkanFaktury) }}
        {{ form_errors(form.plikSkanFaktury) }}
        {{ form_widget(form.plikSkanFaktury) }}
    </div>

    <div id=\"box_checkbox\">
        {{ form_label(form.czyZaplacono) }}
        {{ form_errors(form.czyZaplacono) }}
        {{ form_widget(form.czyZaplacono) }}
    </div>

    <div id=\"paid\">
        {{ form_label(form.terminPlatnosci) }}
        {{ form_errors(form.terminPlatnosci) }}
        {{ form_widget(form.terminPlatnosci) }}
    </div>

    <div id=\"projekty\">
        {{ form_label(form.projekt) }}
        {{ form_errors(form.projekt) }}
        {{ form_widget(form.projekt) }}
    </div>

    <input type=\"submit\" value=\"Dodaj\"/>
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('operacje_nieprzypisane') }}\">Operacje</a>
        </li>
    </ul>

    <script>

        jQuery(document).ready(function (\$) {

            \$(document).on('change', '#rodzaj', function() {

                var rodzajFaktury = \$('select option:selected').val();

                if (rodzajFaktury == 2) {
                    \$('#kwota_netto').hide();
                    \$('#kwota_vat').hide();
                    \$('#appbundle_faktury_kwotaNetto').prop('required',false);
                    \$('#appbundle_faktury_kwotaVat').prop('required',false);
                }else{
                    \$('#kwota_netto').show();
                    \$('#kwota_vat').show();
                }




                    // half_product_select_value = this.value;
                    // half_product_select_name = \$(this).find('option:selected').text();
                    // \$(what_box).find('input.half_product_add').attr(\"disabled\", false);
                    // console.log(\"DEBUG: SELECTED VALUE: \" + half_product_select_value + \" named: \" + half_product_select_name);


            });

            \$('#appbundle_faktury_terminPlatnosci_date_year').prop('required',true);
            \$('#appbundle_faktury_terminPlatnosci_date_month').prop('required',true);
            \$('#appbundle_faktury_terminPlatnosci_date_day').prop('required',true);
            \$('#appbundle_faktury_terminPlatnosci_time_hour').prop('required',true);
            \$('#appbundle_faktury_terminPlatnosci_time_minute').prop('required',true);

            \$(document).on('click', '#appbundle_faktury_czyZaplacono', function (e) {
                if(\$(this).is(\":checked\")){
                    \$('#paid').hide();
                    \$('#appbundle_faktury_terminPlatnosci_date_year').prop('required',false);
                    \$('#appbundle_faktury_terminPlatnosci_date_month').prop('required',false);
                    \$('#appbundle_faktury_terminPlatnosci_date_day').prop('required',false);
                    \$('#appbundle_faktury_terminPlatnosci_time_hour').prop('required',false);
                    \$('#appbundle_faktury_terminPlatnosci_time_minute').prop('required',false);
                }

                else if(\$(this).is(\":not(:checked)\")){
                    \$('#paid').show();
                    \$('#appbundle_faktury_terminPlatnosci_date_year').prop('required',true);
                    \$('#appbundle_faktury_terminPlatnosci_date_month').prop('required',true);
                    \$('#appbundle_faktury_terminPlatnosci_date_day').prop('required',true);
                    \$('#appbundle_faktury_terminPlatnosci_time_hour').prop('required',true);
                    \$('#appbundle_faktury_terminPlatnosci_time_minute').prop('required',true);
                }
            });


            \$(document).on('blur', '#appbundle_faktury_kontrahentNip', function (e) {
                e.preventDefault();
                let value = \$(this).val();



                \$.ajax({
                    url: '{{ (path('faktury_stat_gov_nip')) }}',
                    type: \"POST\",
                    dataType: \"json\",
                    data: {
                        nip: value
                    },
                    async: true,
                }).done(function (data) {
                    console.log(data);
                    if (data.msg == 'OK' && data.response) {
                        console.log(data.response);
                        // alert('submit');
                        // that.off('submit').submit();

                        \$('#appbundle_faktury_kontrahentNazwa').val(data.response.praw_nazwa);
                        \$('#appbundle_faktury_kontrahentAdres').val(data.response.praw_adSiedzUlica_Nazwa+' '+data.response.praw_adSiedzNumerNieruchomosci+' '+data.response.praw_adSiedzNumerLokalu);
                        \$('#appbundle_faktury_kontrahentMiasto').val(data.response.praw_adSiedzMiejscowosc_Nazwa);
                        \$('#appbundle_faktury_kontrahentKodPocztowy').val(data.response.praw_adSiedzKodPocztowy);

                    } else {
                        // alert(data.msg);
                        // \$('#call_return_info').html('');
                    }
                }).fail(function () {
                    console.warn(\"FAIL FAIL\");
                    // \$('#call_return_info').html('FAIL! FAIL');
                });

                return true;

                // console.warn(keywords);
                // that.off('submit').submit();

            });

        });
    </script>
{% endblock %}
", "faktury/new.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\faktury\\new.html.twig");
    }
}
