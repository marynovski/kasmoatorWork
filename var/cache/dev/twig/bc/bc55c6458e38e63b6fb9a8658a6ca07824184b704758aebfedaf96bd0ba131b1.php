<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_1e0b307831883339e1ac4c55be78c381488341ff01392880139bf33837bfdf19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0226e9e6bf25dc29abaa01ba6c7f4fa2b09a8dcccb7d1527b7363b71c7f8632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0226e9e6bf25dc29abaa01ba6c7f4fa2b09a8dcccb7d1527b7363b71c7f8632->enter($__internal_d0226e9e6bf25dc29abaa01ba6c7f4fa2b09a8dcccb7d1527b7363b71c7f8632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_56c6f12b3241bb5b048ce0a84fd2835a387c624e7122e9817c4af196ebe3c8ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c6f12b3241bb5b048ce0a84fd2835a387c624e7122e9817c4af196ebe3c8ea->enter($__internal_56c6f12b3241bb5b048ce0a84fd2835a387c624e7122e9817c4af196ebe3c8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d0226e9e6bf25dc29abaa01ba6c7f4fa2b09a8dcccb7d1527b7363b71c7f8632->leave($__internal_d0226e9e6bf25dc29abaa01ba6c7f4fa2b09a8dcccb7d1527b7363b71c7f8632_prof);

        
        $__internal_56c6f12b3241bb5b048ce0a84fd2835a387c624e7122e9817c4af196ebe3c8ea->leave($__internal_56c6f12b3241bb5b048ce0a84fd2835a387c624e7122e9817c4af196ebe3c8ea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "D:\\xampp\\htdocs\\kasomator\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
