<?php

/* podatki/show.html.twig */
class __TwigTemplate_966d7e9db81c15d33948b2b3e59ec7c0ea26b801b3e747f947881acea8617faf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "podatki/show.html.twig", 1);
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
        $__internal_e6c265cfa2cd8ff95aba281028b24bd265216123639d302ec2a5dd7c646f28c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c265cfa2cd8ff95aba281028b24bd265216123639d302ec2a5dd7c646f28c0->enter($__internal_e6c265cfa2cd8ff95aba281028b24bd265216123639d302ec2a5dd7c646f28c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "podatki/show.html.twig"));

        $__internal_a5c172cbf20306db0718920cfe970f7087f9af4cc696659d442f36eec099bba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c172cbf20306db0718920cfe970f7087f9af4cc696659d442f36eec099bba7->enter($__internal_a5c172cbf20306db0718920cfe970f7087f9af4cc696659d442f36eec099bba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "podatki/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6c265cfa2cd8ff95aba281028b24bd265216123639d302ec2a5dd7c646f28c0->leave($__internal_e6c265cfa2cd8ff95aba281028b24bd265216123639d302ec2a5dd7c646f28c0_prof);

        
        $__internal_a5c172cbf20306db0718920cfe970f7087f9af4cc696659d442f36eec099bba7->leave($__internal_a5c172cbf20306db0718920cfe970f7087f9af4cc696659d442f36eec099bba7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5c8f17d6880f688258d0bb742cb408a814e0565dbd283c6d5fd4dbe770f574e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c8f17d6880f688258d0bb742cb408a814e0565dbd283c6d5fd4dbe770f574e->enter($__internal_c5c8f17d6880f688258d0bb742cb408a814e0565dbd283c6d5fd4dbe770f574e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_979ee360b9887cb4664a0b4a17a07901d6a9cbe010dd4dac13c539680a8e5d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979ee360b9887cb4664a0b4a17a07901d6a9cbe010dd4dac13c539680a8e5d4f->enter($__internal_979ee360b9887cb4664a0b4a17a07901d6a9cbe010dd4dac13c539680a8e5d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Podatki</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["podatki"] ?? $this->getContext($context, "podatki")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Urzad</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["podatki"] ?? $this->getContext($context, "podatki")), "urzad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Naszafirmaid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["podatki"] ?? $this->getContext($context, "podatki")), "naszaFirmaId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Opis</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["podatki"] ?? $this->getContext($context, "podatki")), "opis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Okres</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["podatki"] ?? $this->getContext($context, "podatki")), "okres", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kwota</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["podatki"] ?? $this->getContext($context, "podatki")), "kwota", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Czyzaplacono</th>
                <td>";
        // line 34
        if ($this->getAttribute(($context["podatki"] ?? $this->getContext($context, "podatki")), "czyZaplacono", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Terminplatnosci</th>
                <td>";
        // line 38
        if ($this->getAttribute(($context["podatki"] ?? $this->getContext($context, "podatki")), "terminPlatnosci", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["podatki"] ?? $this->getContext($context, "podatki")), "terminPlatnosci", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_nieprzypisane");
        echo "\">Operacje</a>
        </li>
        ";
        // line 48
        echo "            ";
        // line 49
        echo "        ";
        // line 50
        echo "        ";
        // line 51
        echo "            ";
        // line 52
        echo "                ";
        // line 53
        echo "            ";
        // line 54
        echo "        ";
        // line 55
        echo "    </ul>
";
        
        $__internal_979ee360b9887cb4664a0b4a17a07901d6a9cbe010dd4dac13c539680a8e5d4f->leave($__internal_979ee360b9887cb4664a0b4a17a07901d6a9cbe010dd4dac13c539680a8e5d4f_prof);

        
        $__internal_c5c8f17d6880f688258d0bb742cb408a814e0565dbd283c6d5fd4dbe770f574e->leave($__internal_c5c8f17d6880f688258d0bb742cb408a814e0565dbd283c6d5fd4dbe770f574e_prof);

    }

    public function getTemplateName()
    {
        return "podatki/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 55,  139 => 54,  137 => 53,  135 => 52,  133 => 51,  131 => 50,  129 => 49,  127 => 48,  122 => 45,  110 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Podatki</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ podatki.id }}</td>
            </tr>
            <tr>
                <th>Urzad</th>
                <td>{{ podatki.urzad }}</td>
            </tr>
            <tr>
                <th>Naszafirmaid</th>
                <td>{{ podatki.naszaFirmaId }}</td>
            </tr>
            <tr>
                <th>Opis</th>
                <td>{{ podatki.opis }}</td>
            </tr>
            <tr>
                <th>Okres</th>
                <td>{{ podatki.okres }}</td>
            </tr>
            <tr>
                <th>Kwota</th>
                <td>{{ podatki.kwota }}</td>
            </tr>
            <tr>
                <th>Czyzaplacono</th>
                <td>{% if podatki.czyZaplacono %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Terminplatnosci</th>
                <td>{% if podatki.terminPlatnosci %}{{ podatki.terminPlatnosci|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('operacje_nieprzypisane') }}\">Operacje</a>
        </li>
        {#<li>#}
            {#<a href=\"{{ path('podatki_edit', { 'id': podatki.id }) }}\">Edycja</a>#}
        {#</li>#}
        {#<li>#}
            {#{{ form_start(delete_form) }}#}
                {#<input type=\"submit\" value=\"Usuń\">#}
            {#{{ form_end(delete_form) }}#}
        {#</li>#}
    </ul>
{% endblock %}
", "podatki/show.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\podatki\\show.html.twig");
    }
}
