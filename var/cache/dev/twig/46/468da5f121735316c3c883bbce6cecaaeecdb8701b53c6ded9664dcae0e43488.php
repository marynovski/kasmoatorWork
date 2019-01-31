<?php

/* operacje/upload.html.twig */
class __TwigTemplate_0ac4a90716fab0c30f9e420c27e8a0d73c7346474bba1bf5d23853eac2c55630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "operacje/upload.html.twig", 1);
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
        $__internal_4aa70c1171abf01a3a56372bce772fb7758e7db57bb1af99c613aada2650fc9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa70c1171abf01a3a56372bce772fb7758e7db57bb1af99c613aada2650fc9d->enter($__internal_4aa70c1171abf01a3a56372bce772fb7758e7db57bb1af99c613aada2650fc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "operacje/upload.html.twig"));

        $__internal_974d9f9bdcd1c345577388c24f5707c5733cf2374943769f0a881d4e589b9981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974d9f9bdcd1c345577388c24f5707c5733cf2374943769f0a881d4e589b9981->enter($__internal_974d9f9bdcd1c345577388c24f5707c5733cf2374943769f0a881d4e589b9981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "operacje/upload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aa70c1171abf01a3a56372bce772fb7758e7db57bb1af99c613aada2650fc9d->leave($__internal_4aa70c1171abf01a3a56372bce772fb7758e7db57bb1af99c613aada2650fc9d_prof);

        
        $__internal_974d9f9bdcd1c345577388c24f5707c5733cf2374943769f0a881d4e589b9981->leave($__internal_974d9f9bdcd1c345577388c24f5707c5733cf2374943769f0a881d4e589b9981_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e57dc1b35ff4ac949dbbebe5bb50f329ac04bc8941a75d3527f64a8b98e75d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e57dc1b35ff4ac949dbbebe5bb50f329ac04bc8941a75d3527f64a8b98e75d0->enter($__internal_2e57dc1b35ff4ac949dbbebe5bb50f329ac04bc8941a75d3527f64a8b98e75d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b293e692b9a45be4bac90dd2e061c73936369e8197014bf1da502fec396f8d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b293e692b9a45be4bac90dd2e061c73936369e8197014bf1da502fec396f8d00->enter($__internal_b293e692b9a45be4bac90dd2e061c73936369e8197014bf1da502fec396f8d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Plik wyciągu bankowego</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Załaduj\" />
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
        
        $__internal_b293e692b9a45be4bac90dd2e061c73936369e8197014bf1da502fec396f8d00->leave($__internal_b293e692b9a45be4bac90dd2e061c73936369e8197014bf1da502fec396f8d00_prof);

        
        $__internal_2e57dc1b35ff4ac949dbbebe5bb50f329ac04bc8941a75d3527f64a8b98e75d0->leave($__internal_2e57dc1b35ff4ac949dbbebe5bb50f329ac04bc8941a75d3527f64a8b98e75d0_prof);

    }

    public function getTemplateName()
    {
        return "operacje/upload.html.twig";
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
    <h1>Plik wyciągu bankowego</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Załaduj\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('operacje_nieprzypisane') }}\">Operacje</a>
        </li>
    </ul>
{% endblock %}
", "operacje/upload.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\operacje\\upload.html.twig");
    }
}
