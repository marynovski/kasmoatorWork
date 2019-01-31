<?php

/* podatki/new.html.twig */
class __TwigTemplate_fa4584b0f2d4150c373bc78a4f83bebe79f99d45ea1574cf610f612e5ac5a96c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "podatki/new.html.twig", 1);
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
        $__internal_7035d1bfe3f91fe6aaaccd79fb133df90df04c4a18bba4f34cf7227de55ef89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7035d1bfe3f91fe6aaaccd79fb133df90df04c4a18bba4f34cf7227de55ef89b->enter($__internal_7035d1bfe3f91fe6aaaccd79fb133df90df04c4a18bba4f34cf7227de55ef89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "podatki/new.html.twig"));

        $__internal_39b710d4a840b4fa2750ba4ae14a4c582c1128911a8f9e415f8c9950a786ba6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b710d4a840b4fa2750ba4ae14a4c582c1128911a8f9e415f8c9950a786ba6f->enter($__internal_39b710d4a840b4fa2750ba4ae14a4c582c1128911a8f9e415f8c9950a786ba6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "podatki/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7035d1bfe3f91fe6aaaccd79fb133df90df04c4a18bba4f34cf7227de55ef89b->leave($__internal_7035d1bfe3f91fe6aaaccd79fb133df90df04c4a18bba4f34cf7227de55ef89b_prof);

        
        $__internal_39b710d4a840b4fa2750ba4ae14a4c582c1128911a8f9e415f8c9950a786ba6f->leave($__internal_39b710d4a840b4fa2750ba4ae14a4c582c1128911a8f9e415f8c9950a786ba6f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ba32253c999be3c14bca031c7857ba7788489e08d2341d034b26f4976cdb639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba32253c999be3c14bca031c7857ba7788489e08d2341d034b26f4976cdb639->enter($__internal_3ba32253c999be3c14bca031c7857ba7788489e08d2341d034b26f4976cdb639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_558c8f4bf195cae6e473a8ab17cafafd4ca7e7b1d024bf69014276f74eb3ab1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558c8f4bf195cae6e473a8ab17cafafd4ca7e7b1d024bf69014276f74eb3ab1b->enter($__internal_558c8f4bf195cae6e473a8ab17cafafd4ca7e7b1d024bf69014276f74eb3ab1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Nowy podatek</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <div>
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "urzad", array()), 'label');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "urzad", array()), 'errors');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "urzad", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "naszaFirmaId", array()), 'label');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "naszaFirmaId", array()), 'errors');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "naszaFirmaId", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "opis", array()), 'label');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "opis", array()), 'errors');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "opis", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "okres", array()), 'label');
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "okres", array()), 'errors');
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "okres", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kwota", array()), 'label');
        echo "
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kwota", array()), 'errors');
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kwota", array()), 'widget');
        echo "
    </div>

    <div id=\"czyZaplacono\">
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "czyZaplacono", array()), 'label');
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "czyZaplacono", array()), 'errors');
        echo "
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "czyZaplacono", array()), 'widget');
        echo "
    </div>

    <div id=\"paid\">
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "terminPlatnosci", array()), 'label');
        echo "
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "terminPlatnosci", array()), 'errors');
        echo "
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "terminPlatnosci", array()), 'widget');
        echo "
    </div>
        ";
        // line 49
        echo "        <input type=\"submit\" value=\"Dodaj\" />
    ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_nieprzypisane");
        echo "\">Operacje</a>
        </li>
    </ul>

    <script>
        \$('#appbundle_podatki_terminPlatnosci_date_year').prop('required', true);
        \$('#appbundle_faktury_terminPlatnosci_date_month').prop('required', true);
        \$('#appbundle_faktury_terminPlatnosci_date_day').prop('required', true);
        \$('#appbundle_faktury_terminPlatnosci_time_hour').prop('required', true);
        \$('#appbundle_faktury_terminPlatnosci_time_minute').prop('required', true);

        \$(document).on('click', '#appbundle_podatki_czyZaplacono', function (e) {

            if(\$(this).is(\":checked\")){
                \$('#paid').hide();
                \$('#appbundle_podatki_terminPlatnosci_date_year').prop('required', false);
                \$('#appbundle_faktury_terminPlatnosci_date_month').prop('required', false);
                \$('#appbundle_faktury_terminPlatnosci_date_day').prop('required', false);
                \$('#appbundle_faktury_terminPlatnosci_time_hour').prop('required', false);
                \$('#appbundle_faktury_terminPlatnosci_time_minute').prop('required', false);

            }

            else if(\$(this).is(\":not(:checked)\")){
                \$('#paid').show();
                \$('#appbundle_podatki_terminPlatnosci_date_year').prop('required', true);
                \$('#appbundle_faktury_terminPlatnosci_date_month').prop('required', true);
                \$('#appbundle_faktury_terminPlatnosci_date_day').prop('required', true);
                \$('#appbundle_faktury_terminPlatnosci_time_hour').prop('required', true);
                \$('#appbundle_faktury_terminPlatnosci_time_minute').prop('required', true);

            }
        });
    </script>
";
        
        $__internal_558c8f4bf195cae6e473a8ab17cafafd4ca7e7b1d024bf69014276f74eb3ab1b->leave($__internal_558c8f4bf195cae6e473a8ab17cafafd4ca7e7b1d024bf69014276f74eb3ab1b_prof);

        
        $__internal_3ba32253c999be3c14bca031c7857ba7788489e08d2341d034b26f4976cdb639->leave($__internal_3ba32253c999be3c14bca031c7857ba7788489e08d2341d034b26f4976cdb639_prof);

    }

    public function getTemplateName()
    {
        return "podatki/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 53,  164 => 50,  161 => 49,  156 => 46,  152 => 45,  148 => 44,  141 => 40,  137 => 39,  133 => 38,  126 => 34,  122 => 33,  118 => 32,  111 => 28,  107 => 27,  103 => 26,  96 => 22,  92 => 21,  88 => 20,  81 => 16,  77 => 15,  73 => 14,  66 => 10,  62 => 9,  58 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Nowy podatek</h1>

    {{ form_start(form) }}
    <div>
        {{ form_label(form.urzad) }}
        {{ form_errors(form.urzad) }}
        {{ form_widget(form.urzad) }}
    </div>

    <div>
        {{ form_label(form.naszaFirmaId) }}
        {{ form_errors(form.naszaFirmaId) }}
        {{ form_widget(form.naszaFirmaId) }}
    </div>

    <div>
        {{ form_label(form.opis) }}
        {{ form_errors(form.opis) }}
        {{ form_widget(form.opis) }}
    </div>

    <div>
        {{ form_label(form.okres) }}
        {{ form_errors(form.okres) }}
        {{ form_widget(form.okres) }}
    </div>

    <div>
        {{ form_label(form.kwota) }}
        {{ form_errors(form.kwota) }}
        {{ form_widget(form.kwota) }}
    </div>

    <div id=\"czyZaplacono\">
        {{ form_label(form.czyZaplacono) }}
        {{ form_errors(form.czyZaplacono) }}
        {{ form_widget(form.czyZaplacono) }}
    </div>

    <div id=\"paid\">
        {{ form_label(form.terminPlatnosci) }}
        {{ form_errors(form.terminPlatnosci) }}
        {{ form_widget(form.terminPlatnosci) }}
    </div>
        {#{{ form_widget(form) }}#}
        <input type=\"submit\" value=\"Dodaj\" />
    {{ form_end(form) }}
    <ul>
        <li>
            <a href=\"{{ path('operacje_nieprzypisane') }}\">Operacje</a>
        </li>
    </ul>

    <script>
        \$('#appbundle_podatki_terminPlatnosci_date_year').prop('required', true);
        \$('#appbundle_faktury_terminPlatnosci_date_month').prop('required', true);
        \$('#appbundle_faktury_terminPlatnosci_date_day').prop('required', true);
        \$('#appbundle_faktury_terminPlatnosci_time_hour').prop('required', true);
        \$('#appbundle_faktury_terminPlatnosci_time_minute').prop('required', true);

        \$(document).on('click', '#appbundle_podatki_czyZaplacono', function (e) {

            if(\$(this).is(\":checked\")){
                \$('#paid').hide();
                \$('#appbundle_podatki_terminPlatnosci_date_year').prop('required', false);
                \$('#appbundle_faktury_terminPlatnosci_date_month').prop('required', false);
                \$('#appbundle_faktury_terminPlatnosci_date_day').prop('required', false);
                \$('#appbundle_faktury_terminPlatnosci_time_hour').prop('required', false);
                \$('#appbundle_faktury_terminPlatnosci_time_minute').prop('required', false);

            }

            else if(\$(this).is(\":not(:checked)\")){
                \$('#paid').show();
                \$('#appbundle_podatki_terminPlatnosci_date_year').prop('required', true);
                \$('#appbundle_faktury_terminPlatnosci_date_month').prop('required', true);
                \$('#appbundle_faktury_terminPlatnosci_date_day').prop('required', true);
                \$('#appbundle_faktury_terminPlatnosci_time_hour').prop('required', true);
                \$('#appbundle_faktury_terminPlatnosci_time_minute').prop('required', true);

            }
        });
    </script>
{% endblock %}
", "podatki/new.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\podatki\\new.html.twig");
    }
}
