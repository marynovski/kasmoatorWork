<?php

/* projekty/new.html.twig */
class __TwigTemplate_e2d65a7b45121254fb90d82891ea9856ddebec066bbb8fa993ee20eb629f2cff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projekty/new.html.twig", 1);
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
        $__internal_af3fd88c2decad2c1e27ce0e2e8864f5c0857a37673e957096beefa5cd6974a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3fd88c2decad2c1e27ce0e2e8864f5c0857a37673e957096beefa5cd6974a7->enter($__internal_af3fd88c2decad2c1e27ce0e2e8864f5c0857a37673e957096beefa5cd6974a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projekty/new.html.twig"));

        $__internal_e6c967485e2392f048fac5656c88dcc956c4984c3b966c6bf2ea98b5067e0a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c967485e2392f048fac5656c88dcc956c4984c3b966c6bf2ea98b5067e0a7c->enter($__internal_e6c967485e2392f048fac5656c88dcc956c4984c3b966c6bf2ea98b5067e0a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projekty/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af3fd88c2decad2c1e27ce0e2e8864f5c0857a37673e957096beefa5cd6974a7->leave($__internal_af3fd88c2decad2c1e27ce0e2e8864f5c0857a37673e957096beefa5cd6974a7_prof);

        
        $__internal_e6c967485e2392f048fac5656c88dcc956c4984c3b966c6bf2ea98b5067e0a7c->leave($__internal_e6c967485e2392f048fac5656c88dcc956c4984c3b966c6bf2ea98b5067e0a7c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d5c15916d48eda1421ef97790e820c92c9021e44cb9286315d71f5105a1d7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5c15916d48eda1421ef97790e820c92c9021e44cb9286315d71f5105a1d7f2->enter($__internal_3d5c15916d48eda1421ef97790e820c92c9021e44cb9286315d71f5105a1d7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e90a94591c9e8149d78420674eb522fc6b46ac82804bfbe776b11aa12ac7a3ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90a94591c9e8149d78420674eb522fc6b46ac82804bfbe776b11aa12ac7a3ac->enter($__internal_e90a94591c9e8149d78420674eb522fc6b46ac82804bfbe776b11aa12ac7a3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Nowy projekt</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Dodaj\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_nieprzypisane");
        echo "\">Operacje</a>
        </li>
    </ul>
";
        
        $__internal_e90a94591c9e8149d78420674eb522fc6b46ac82804bfbe776b11aa12ac7a3ac->leave($__internal_e90a94591c9e8149d78420674eb522fc6b46ac82804bfbe776b11aa12ac7a3ac_prof);

        
        $__internal_3d5c15916d48eda1421ef97790e820c92c9021e44cb9286315d71f5105a1d7f2->leave($__internal_3d5c15916d48eda1421ef97790e820c92c9021e44cb9286315d71f5105a1d7f2_prof);

    }

    public function getTemplateName()
    {
        return "projekty/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Nowy projekt</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Dodaj\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('operacje_nieprzypisane') }}\">Operacje</a>
        </li>
    </ul>
{% endblock %}
", "projekty/new.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\projekty\\new.html.twig");
    }
}
