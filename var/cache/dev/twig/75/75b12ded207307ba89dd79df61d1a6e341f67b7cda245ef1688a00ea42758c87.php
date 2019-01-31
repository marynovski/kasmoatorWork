<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_92afae8f0a8b2a127401ed5edabf1caa0186b55ffbfe779b077167282bc0889d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bb963a3b47ae71dd317d197597bb25ee222122d530c082806fb39a5eb45fec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb963a3b47ae71dd317d197597bb25ee222122d530c082806fb39a5eb45fec4->enter($__internal_8bb963a3b47ae71dd317d197597bb25ee222122d530c082806fb39a5eb45fec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_040983a52581c2d0465b4d5b8ee9e10c5b375416a91e15fb06b253f052173b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040983a52581c2d0465b4d5b8ee9e10c5b375416a91e15fb06b253f052173b99->enter($__internal_040983a52581c2d0465b4d5b8ee9e10c5b375416a91e15fb06b253f052173b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bb963a3b47ae71dd317d197597bb25ee222122d530c082806fb39a5eb45fec4->leave($__internal_8bb963a3b47ae71dd317d197597bb25ee222122d530c082806fb39a5eb45fec4_prof);

        
        $__internal_040983a52581c2d0465b4d5b8ee9e10c5b375416a91e15fb06b253f052173b99->leave($__internal_040983a52581c2d0465b4d5b8ee9e10c5b375416a91e15fb06b253f052173b99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_076d324882ce92ec7089f2fa7682c7ff89ffc48c2392eaec201187e1099d98ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076d324882ce92ec7089f2fa7682c7ff89ffc48c2392eaec201187e1099d98ac->enter($__internal_076d324882ce92ec7089f2fa7682c7ff89ffc48c2392eaec201187e1099d98ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cd4df272b84eb587d2aec802e28d9be0fb9f3f83ab5d74d2f7dc744bc755aab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4df272b84eb587d2aec802e28d9be0fb9f3f83ab5d74d2f7dc744bc755aab3->enter($__internal_cd4df272b84eb587d2aec802e28d9be0fb9f3f83ab5d74d2f7dc744bc755aab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_cd4df272b84eb587d2aec802e28d9be0fb9f3f83ab5d74d2f7dc744bc755aab3->leave($__internal_cd4df272b84eb587d2aec802e28d9be0fb9f3f83ab5d74d2f7dc744bc755aab3_prof);

        
        $__internal_076d324882ce92ec7089f2fa7682c7ff89ffc48c2392eaec201187e1099d98ac->leave($__internal_076d324882ce92ec7089f2fa7682c7ff89ffc48c2392eaec201187e1099d98ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\xampp\\htdocs\\kasomator\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
