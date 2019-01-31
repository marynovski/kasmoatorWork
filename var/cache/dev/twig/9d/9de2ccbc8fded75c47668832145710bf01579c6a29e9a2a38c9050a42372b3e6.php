<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_79679ad6c3dd2a55ae6d34e4ec2393f5eb46513f7d85244bac745220d300d58a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_fdd1d7844e0662546cb9aecb37443461b0897c33c17ff28fd3a8e0fc9f177815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd1d7844e0662546cb9aecb37443461b0897c33c17ff28fd3a8e0fc9f177815->enter($__internal_fdd1d7844e0662546cb9aecb37443461b0897c33c17ff28fd3a8e0fc9f177815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8332eedcabb426cc1752f13a8baacc002617f12bfc088faf034917cfcf5a49a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8332eedcabb426cc1752f13a8baacc002617f12bfc088faf034917cfcf5a49a2->enter($__internal_8332eedcabb426cc1752f13a8baacc002617f12bfc088faf034917cfcf5a49a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdd1d7844e0662546cb9aecb37443461b0897c33c17ff28fd3a8e0fc9f177815->leave($__internal_fdd1d7844e0662546cb9aecb37443461b0897c33c17ff28fd3a8e0fc9f177815_prof);

        
        $__internal_8332eedcabb426cc1752f13a8baacc002617f12bfc088faf034917cfcf5a49a2->leave($__internal_8332eedcabb426cc1752f13a8baacc002617f12bfc088faf034917cfcf5a49a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f62ae41191bb8119af2cfdc75a72903b1fb228b54e0070fb450514e9e6c4729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f62ae41191bb8119af2cfdc75a72903b1fb228b54e0070fb450514e9e6c4729->enter($__internal_2f62ae41191bb8119af2cfdc75a72903b1fb228b54e0070fb450514e9e6c4729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7e9c62b1defb1e62800bc6749095412f1ade357ae308ac9e9fcf672982a44309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9c62b1defb1e62800bc6749095412f1ade357ae308ac9e9fcf672982a44309->enter($__internal_7e9c62b1defb1e62800bc6749095412f1ade357ae308ac9e9fcf672982a44309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7e9c62b1defb1e62800bc6749095412f1ade357ae308ac9e9fcf672982a44309->leave($__internal_7e9c62b1defb1e62800bc6749095412f1ade357ae308ac9e9fcf672982a44309_prof);

        
        $__internal_2f62ae41191bb8119af2cfdc75a72903b1fb228b54e0070fb450514e9e6c4729->leave($__internal_2f62ae41191bb8119af2cfdc75a72903b1fb228b54e0070fb450514e9e6c4729_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e008460982a4c4377e1a5f7ffcb45f6d010dbd9893b0f0b7092e8f1db8f9775d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e008460982a4c4377e1a5f7ffcb45f6d010dbd9893b0f0b7092e8f1db8f9775d->enter($__internal_e008460982a4c4377e1a5f7ffcb45f6d010dbd9893b0f0b7092e8f1db8f9775d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_562b61cee1d793d73ab7ea63f5bcee7321297f899f848cc9ded35a29f7ae03da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562b61cee1d793d73ab7ea63f5bcee7321297f899f848cc9ded35a29f7ae03da->enter($__internal_562b61cee1d793d73ab7ea63f5bcee7321297f899f848cc9ded35a29f7ae03da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_562b61cee1d793d73ab7ea63f5bcee7321297f899f848cc9ded35a29f7ae03da->leave($__internal_562b61cee1d793d73ab7ea63f5bcee7321297f899f848cc9ded35a29f7ae03da_prof);

        
        $__internal_e008460982a4c4377e1a5f7ffcb45f6d010dbd9893b0f0b7092e8f1db8f9775d->leave($__internal_e008460982a4c4377e1a5f7ffcb45f6d010dbd9893b0f0b7092e8f1db8f9775d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ff1467c80123208ccedc2b91de1726b1210444336f8493d6b53fa2bb0d82f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff1467c80123208ccedc2b91de1726b1210444336f8493d6b53fa2bb0d82f2b->enter($__internal_4ff1467c80123208ccedc2b91de1726b1210444336f8493d6b53fa2bb0d82f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d316582df5fcb0eb1143a5329efd6daa261c3514e0f12307614b4aedcd71eb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d316582df5fcb0eb1143a5329efd6daa261c3514e0f12307614b4aedcd71eb10->enter($__internal_d316582df5fcb0eb1143a5329efd6daa261c3514e0f12307614b4aedcd71eb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d316582df5fcb0eb1143a5329efd6daa261c3514e0f12307614b4aedcd71eb10->leave($__internal_d316582df5fcb0eb1143a5329efd6daa261c3514e0f12307614b4aedcd71eb10_prof);

        
        $__internal_4ff1467c80123208ccedc2b91de1726b1210444336f8493d6b53fa2bb0d82f2b->leave($__internal_4ff1467c80123208ccedc2b91de1726b1210444336f8493d6b53fa2bb0d82f2b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\xampp\\htdocs\\kasomator\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
