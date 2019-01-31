<?php

/* projekty/show.html.twig */
class __TwigTemplate_e6a78c21f2542aeb874b81344d6ac63fa4b9d7bcca62c780203b79940ed4d931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projekty/show.html.twig", 1);
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
        $__internal_5d138f7f9af27488c95374764fba843e64e37d9d76e996e02aae6ae419a96948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d138f7f9af27488c95374764fba843e64e37d9d76e996e02aae6ae419a96948->enter($__internal_5d138f7f9af27488c95374764fba843e64e37d9d76e996e02aae6ae419a96948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projekty/show.html.twig"));

        $__internal_f3c94dffffa5bbc7a9512da0f52bc800d6a6ab66775d634191e3a96d7589c93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c94dffffa5bbc7a9512da0f52bc800d6a6ab66775d634191e3a96d7589c93c->enter($__internal_f3c94dffffa5bbc7a9512da0f52bc800d6a6ab66775d634191e3a96d7589c93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projekty/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d138f7f9af27488c95374764fba843e64e37d9d76e996e02aae6ae419a96948->leave($__internal_5d138f7f9af27488c95374764fba843e64e37d9d76e996e02aae6ae419a96948_prof);

        
        $__internal_f3c94dffffa5bbc7a9512da0f52bc800d6a6ab66775d634191e3a96d7589c93c->leave($__internal_f3c94dffffa5bbc7a9512da0f52bc800d6a6ab66775d634191e3a96d7589c93c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae01e7120c4a5fb246d15ab460e974d01772c286c319b3268b4a4884165e7f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae01e7120c4a5fb246d15ab460e974d01772c286c319b3268b4a4884165e7f9d->enter($__internal_ae01e7120c4a5fb246d15ab460e974d01772c286c319b3268b4a4884165e7f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aaf570fce95a078f73e0d45f861c833da9109d106d15c6d5008899c3119908df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf570fce95a078f73e0d45f861c833da9109d106d15c6d5008899c3119908df->enter($__internal_aaf570fce95a078f73e0d45f861c833da9109d106d15c6d5008899c3119908df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Projekt</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["projekty"] ?? $this->getContext($context, "projekty")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nazwa</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["projekty"] ?? $this->getContext($context, "projekty")), "nazwa", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projekty_index");
        echo "\">Back to the list</a>
        </li>
        ";
        // line 24
        echo "            ";
        // line 25
        echo "        ";
        // line 26
        echo "        ";
        // line 27
        echo "            ";
        // line 28
        echo "                ";
        // line 29
        echo "            ";
        // line 30
        echo "        ";
        // line 31
        echo "    </ul>
";
        
        $__internal_aaf570fce95a078f73e0d45f861c833da9109d106d15c6d5008899c3119908df->leave($__internal_aaf570fce95a078f73e0d45f861c833da9109d106d15c6d5008899c3119908df_prof);

        
        $__internal_ae01e7120c4a5fb246d15ab460e974d01772c286c319b3268b4a4884165e7f9d->leave($__internal_ae01e7120c4a5fb246d15ab460e974d01772c286c319b3268b4a4884165e7f9d_prof);

    }

    public function getTemplateName()
    {
        return "projekty/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  91 => 30,  89 => 29,  87 => 28,  85 => 27,  83 => 26,  81 => 25,  79 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Projekt</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ projekty.id }}</td>
            </tr>
            <tr>
                <th>Nazwa</th>
                <td>{{ projekty.nazwa }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('projekty_index') }}\">Back to the list</a>
        </li>
        {#<li>#}
            {#<a href=\"{{ path('projekty_edit', { 'id': projekty.id }) }}\">Edit</a>#}
        {#</li>#}
        {#<li>#}
            {#{{ form_start(delete_form) }}#}
                {#<input type=\"submit\" value=\"Delete\">#}
            {#{{ form_end(delete_form) }}#}
        {#</li>#}
    </ul>
{% endblock %}
", "projekty/show.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\projekty\\show.html.twig");
    }
}
