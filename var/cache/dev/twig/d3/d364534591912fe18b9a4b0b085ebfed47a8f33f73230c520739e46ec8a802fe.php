<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_18f8151750d50ceb60120d6f7be7f00c81abe5375e387e910b1f2f20e5dcf74f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_becf2bdea8773c1b0f6f9930043c9da33e51a696e1cc9af33f6f75f04cfe72c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_becf2bdea8773c1b0f6f9930043c9da33e51a696e1cc9af33f6f75f04cfe72c1->enter($__internal_becf2bdea8773c1b0f6f9930043c9da33e51a696e1cc9af33f6f75f04cfe72c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_07ba02e1d6b4a236b29043b48b8df70d39e9be686da1b0df1a89e6d9d351374d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ba02e1d6b4a236b29043b48b8df70d39e9be686da1b0df1a89e6d9d351374d->enter($__internal_07ba02e1d6b4a236b29043b48b8df70d39e9be686da1b0df1a89e6d9d351374d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_becf2bdea8773c1b0f6f9930043c9da33e51a696e1cc9af33f6f75f04cfe72c1->leave($__internal_becf2bdea8773c1b0f6f9930043c9da33e51a696e1cc9af33f6f75f04cfe72c1_prof);

        
        $__internal_07ba02e1d6b4a236b29043b48b8df70d39e9be686da1b0df1a89e6d9d351374d->leave($__internal_07ba02e1d6b4a236b29043b48b8df70d39e9be686da1b0df1a89e6d9d351374d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_99d923c6ec29d757ced4cd0e3570f4a8cb3e41cfc0c1424ed15c0ec89aeae8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d923c6ec29d757ced4cd0e3570f4a8cb3e41cfc0c1424ed15c0ec89aeae8ea->enter($__internal_99d923c6ec29d757ced4cd0e3570f4a8cb3e41cfc0c1424ed15c0ec89aeae8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fb1cf6864681eb236d7d5e167ac3266da75090a937fa6d55ab8e87ad44454884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1cf6864681eb236d7d5e167ac3266da75090a937fa6d55ab8e87ad44454884->enter($__internal_fb1cf6864681eb236d7d5e167ac3266da75090a937fa6d55ab8e87ad44454884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fb1cf6864681eb236d7d5e167ac3266da75090a937fa6d55ab8e87ad44454884->leave($__internal_fb1cf6864681eb236d7d5e167ac3266da75090a937fa6d55ab8e87ad44454884_prof);

        
        $__internal_99d923c6ec29d757ced4cd0e3570f4a8cb3e41cfc0c1424ed15c0ec89aeae8ea->leave($__internal_99d923c6ec29d757ced4cd0e3570f4a8cb3e41cfc0c1424ed15c0ec89aeae8ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6dddc051dde0a0fc88e8fc7f20b216da7d42aff17f69b922e2bccd5385e45634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dddc051dde0a0fc88e8fc7f20b216da7d42aff17f69b922e2bccd5385e45634->enter($__internal_6dddc051dde0a0fc88e8fc7f20b216da7d42aff17f69b922e2bccd5385e45634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a678263a87ebf2604fae24bfde9a52d4d090abaa91b4dadf0ebf813692b232b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a678263a87ebf2604fae24bfde9a52d4d090abaa91b4dadf0ebf813692b232b->enter($__internal_5a678263a87ebf2604fae24bfde9a52d4d090abaa91b4dadf0ebf813692b232b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a678263a87ebf2604fae24bfde9a52d4d090abaa91b4dadf0ebf813692b232b->leave($__internal_5a678263a87ebf2604fae24bfde9a52d4d090abaa91b4dadf0ebf813692b232b_prof);

        
        $__internal_6dddc051dde0a0fc88e8fc7f20b216da7d42aff17f69b922e2bccd5385e45634->leave($__internal_6dddc051dde0a0fc88e8fc7f20b216da7d42aff17f69b922e2bccd5385e45634_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_542d9c00b7179c96e9121ec3453aa6261d6424fd8063b57522e7c60c7c5745c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_542d9c00b7179c96e9121ec3453aa6261d6424fd8063b57522e7c60c7c5745c8->enter($__internal_542d9c00b7179c96e9121ec3453aa6261d6424fd8063b57522e7c60c7c5745c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e9eb582036314c8f0ff721fb88c112f70a72bea386288934f8b5edb4ba133769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9eb582036314c8f0ff721fb88c112f70a72bea386288934f8b5edb4ba133769->enter($__internal_e9eb582036314c8f0ff721fb88c112f70a72bea386288934f8b5edb4ba133769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e9eb582036314c8f0ff721fb88c112f70a72bea386288934f8b5edb4ba133769->leave($__internal_e9eb582036314c8f0ff721fb88c112f70a72bea386288934f8b5edb4ba133769_prof);

        
        $__internal_542d9c00b7179c96e9121ec3453aa6261d6424fd8063b57522e7c60c7c5745c8->leave($__internal_542d9c00b7179c96e9121ec3453aa6261d6424fd8063b57522e7c60c7c5745c8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\kasomator\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
