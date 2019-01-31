<?php

/* naszefirmy/new.html.twig */
class __TwigTemplate_570c88e21f1e393171aee87d71892c4ff09aa4c6fc35139c9033d7a208427c1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "naszefirmy/new.html.twig", 1);
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
        $__internal_5eb9638bb7308601f9aa33ba1dea0f86e19ed5e1e525971e6874b147d9ff9ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb9638bb7308601f9aa33ba1dea0f86e19ed5e1e525971e6874b147d9ff9ece->enter($__internal_5eb9638bb7308601f9aa33ba1dea0f86e19ed5e1e525971e6874b147d9ff9ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "naszefirmy/new.html.twig"));

        $__internal_271ce7c2d314a1378866513420f98becf9f0717c47b4598b1f4919082a9e147c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271ce7c2d314a1378866513420f98becf9f0717c47b4598b1f4919082a9e147c->enter($__internal_271ce7c2d314a1378866513420f98becf9f0717c47b4598b1f4919082a9e147c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "naszefirmy/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eb9638bb7308601f9aa33ba1dea0f86e19ed5e1e525971e6874b147d9ff9ece->leave($__internal_5eb9638bb7308601f9aa33ba1dea0f86e19ed5e1e525971e6874b147d9ff9ece_prof);

        
        $__internal_271ce7c2d314a1378866513420f98becf9f0717c47b4598b1f4919082a9e147c->leave($__internal_271ce7c2d314a1378866513420f98becf9f0717c47b4598b1f4919082a9e147c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3761a3506f4b4f448f5359511b76314a146637f4bb1096b272edbd8f84a026d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3761a3506f4b4f448f5359511b76314a146637f4bb1096b272edbd8f84a026d0->enter($__internal_3761a3506f4b4f448f5359511b76314a146637f4bb1096b272edbd8f84a026d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7168c3cffd20ce09d6e9ec4aab20d495f2e6624e8439aef068f4bae06becf6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7168c3cffd20ce09d6e9ec4aab20d495f2e6624e8439aef068f4bae06becf6f->enter($__internal_e7168c3cffd20ce09d6e9ec4aab20d495f2e6624e8439aef068f4bae06becf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dodaj firmę</h1>

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
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_nieprzypisane");
        echo "\">Operacje</a>
        </li>
    </ul>
";
        
        $__internal_e7168c3cffd20ce09d6e9ec4aab20d495f2e6624e8439aef068f4bae06becf6f->leave($__internal_e7168c3cffd20ce09d6e9ec4aab20d495f2e6624e8439aef068f4bae06becf6f_prof);

        
        $__internal_3761a3506f4b4f448f5359511b76314a146637f4bb1096b272edbd8f84a026d0->leave($__internal_3761a3506f4b4f448f5359511b76314a146637f4bb1096b272edbd8f84a026d0_prof);

    }

    public function getTemplateName()
    {
        return "naszefirmy/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Dodaj firmę</h1>

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
", "naszefirmy/new.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\naszefirmy\\new.html.twig");
    }
}
