<?php

/* operacje/new.html.twig */
class __TwigTemplate_388c5088200e7bb6c7991e076a9409c497aebe3775bbcf4ba48fdf9c810dd109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "operacje/new.html.twig", 1);
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
        $__internal_dc09f08a649e653a8413b977b0b770c85d84ef4bc888c530afd6e78b894a6fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc09f08a649e653a8413b977b0b770c85d84ef4bc888c530afd6e78b894a6fbd->enter($__internal_dc09f08a649e653a8413b977b0b770c85d84ef4bc888c530afd6e78b894a6fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "operacje/new.html.twig"));

        $__internal_981c46a7b2530991c2d7225d297a531f730ec16f7070b979cd9235257bfd1ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981c46a7b2530991c2d7225d297a531f730ec16f7070b979cd9235257bfd1ae0->enter($__internal_981c46a7b2530991c2d7225d297a531f730ec16f7070b979cd9235257bfd1ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "operacje/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc09f08a649e653a8413b977b0b770c85d84ef4bc888c530afd6e78b894a6fbd->leave($__internal_dc09f08a649e653a8413b977b0b770c85d84ef4bc888c530afd6e78b894a6fbd_prof);

        
        $__internal_981c46a7b2530991c2d7225d297a531f730ec16f7070b979cd9235257bfd1ae0->leave($__internal_981c46a7b2530991c2d7225d297a531f730ec16f7070b979cd9235257bfd1ae0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b18b88c3bfe75f79f8d235c76aeaed1ef520522ad2ad0654ff256e33e32598f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18b88c3bfe75f79f8d235c76aeaed1ef520522ad2ad0654ff256e33e32598f1->enter($__internal_b18b88c3bfe75f79f8d235c76aeaed1ef520522ad2ad0654ff256e33e32598f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_049df4539cab9b3b6c9739fd6048cc1c87a3e85ef218e2b1cad1bd761fe9a794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049df4539cab9b3b6c9739fd6048cc1c87a3e85ef218e2b1cad1bd761fe9a794->enter($__internal_049df4539cab9b3b6c9739fd6048cc1c87a3e85ef218e2b1cad1bd761fe9a794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Nowa operacja</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wyplatygotowkowe_index");
        echo "\">Lista operacji</a>
        </li>
    </ul>
";
        
        $__internal_049df4539cab9b3b6c9739fd6048cc1c87a3e85ef218e2b1cad1bd761fe9a794->leave($__internal_049df4539cab9b3b6c9739fd6048cc1c87a3e85ef218e2b1cad1bd761fe9a794_prof);

        
        $__internal_b18b88c3bfe75f79f8d235c76aeaed1ef520522ad2ad0654ff256e33e32598f1->leave($__internal_b18b88c3bfe75f79f8d235c76aeaed1ef520522ad2ad0654ff256e33e32598f1_prof);

    }

    public function getTemplateName()
    {
        return "operacje/new.html.twig";
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
    <h1>Nowa operacja</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Dodaj\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('wyplatygotowkowe_index') }}\">Lista operacji</a>
        </li>
    </ul>
{% endblock %}
", "operacje/new.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\operacje\\new.html.twig");
    }
}
