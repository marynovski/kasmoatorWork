<?php

/* faktury/show.html.twig */
class __TwigTemplate_86babb9735cfd19d1514ba8c0973705bd768d0abc7c10584e15702a94ed2df9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "faktury/show.html.twig", 1);
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
        $__internal_2ec4950d5f80c7cecfa64b6ee262b02c660a623972e6844686ab7795854143b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec4950d5f80c7cecfa64b6ee262b02c660a623972e6844686ab7795854143b3->enter($__internal_2ec4950d5f80c7cecfa64b6ee262b02c660a623972e6844686ab7795854143b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "faktury/show.html.twig"));

        $__internal_0fbece6a14be317573b7678d68ffe95aecbef0bca893c113a85ca5878f0cf9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fbece6a14be317573b7678d68ffe95aecbef0bca893c113a85ca5878f0cf9f4->enter($__internal_0fbece6a14be317573b7678d68ffe95aecbef0bca893c113a85ca5878f0cf9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "faktury/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ec4950d5f80c7cecfa64b6ee262b02c660a623972e6844686ab7795854143b3->leave($__internal_2ec4950d5f80c7cecfa64b6ee262b02c660a623972e6844686ab7795854143b3_prof);

        
        $__internal_0fbece6a14be317573b7678d68ffe95aecbef0bca893c113a85ca5878f0cf9f4->leave($__internal_0fbece6a14be317573b7678d68ffe95aecbef0bca893c113a85ca5878f0cf9f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24576fe6504f3407f3d8a25131d3dd9569d70f0e134d34c5b15a42a257aea072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24576fe6504f3407f3d8a25131d3dd9569d70f0e134d34c5b15a42a257aea072->enter($__internal_24576fe6504f3407f3d8a25131d3dd9569d70f0e134d34c5b15a42a257aea072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_070351b9e0d72f7c3266e002420ec86a45a994bb80b106bd28dd67a9fa172f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070351b9e0d72f7c3266e002420ec86a45a994bb80b106bd28dd67a9fa172f6c->enter($__internal_070351b9e0d72f7c3266e002420ec86a45a994bb80b106bd28dd67a9fa172f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dane faktury</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faktury"] ?? $this->getContext($context, "faktury")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rodzaj</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faktury"] ?? $this->getContext($context, "faktury")), "rodzaj", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Naszafirmaid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faktury"] ?? $this->getContext($context, "faktury")), "naszaFirmaId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kontrahent</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faktury"] ?? $this->getContext($context, "faktury")), "kontrahent", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numer</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faktury"] ?? $this->getContext($context, "faktury")), "numer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datawystawienia</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["faktury"] ?? $this->getContext($context, "faktury")), "dataWystawienia", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["faktury"] ?? $this->getContext($context, "faktury")), "dataWystawienia", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Kontrahentnrkonta</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faktury"] ?? $this->getContext($context, "faktury")), "kontrahentNrKonta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kwotanetto</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faktury"] ?? $this->getContext($context, "faktury")), "kwotaNetto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kwotabrutto</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faktury"] ?? $this->getContext($context, "faktury")), "kwotaBrutto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kwotavat</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faktury"] ?? $this->getContext($context, "faktury")), "kwotaVat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Opis</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faktury"] ?? $this->getContext($context, "faktury")), "opis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Formaplatnosci</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faktury"] ?? $this->getContext($context, "faktury")), "formaPlatnosci", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Plikskanfaktury</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faktury"] ?? $this->getContext($context, "faktury")), "plikSkanFaktury", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Czyzaplacono</th>
                <td>";
        // line 62
        if ($this->getAttribute(($context["faktury"] ?? $this->getContext($context, "faktury")), "czyZaplacono", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_nieprzypisane");
        echo "\">Operacje</a>
        </li>
        ";
        // line 72
        echo "            ";
        // line 73
        echo "        ";
        // line 74
        echo "        ";
        // line 75
        echo "            ";
        // line 76
        echo "                ";
        // line 77
        echo "            ";
        // line 78
        echo "        ";
        // line 79
        echo "    </ul>
";
        
        $__internal_070351b9e0d72f7c3266e002420ec86a45a994bb80b106bd28dd67a9fa172f6c->leave($__internal_070351b9e0d72f7c3266e002420ec86a45a994bb80b106bd28dd67a9fa172f6c_prof);

        
        $__internal_24576fe6504f3407f3d8a25131d3dd9569d70f0e134d34c5b15a42a257aea072->leave($__internal_24576fe6504f3407f3d8a25131d3dd9569d70f0e134d34c5b15a42a257aea072_prof);

    }

    public function getTemplateName()
    {
        return "faktury/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 79,  181 => 78,  179 => 77,  177 => 76,  175 => 75,  173 => 74,  171 => 73,  169 => 72,  164 => 69,  150 => 62,  143 => 58,  136 => 54,  129 => 50,  122 => 46,  115 => 42,  108 => 38,  101 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Dane faktury</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ faktury.id }}</td>
            </tr>
            <tr>
                <th>Rodzaj</th>
                <td>{{ faktury.rodzaj }}</td>
            </tr>
            <tr>
                <th>Naszafirmaid</th>
                <td>{{ faktury.naszaFirmaId }}</td>
            </tr>
            <tr>
                <th>Kontrahent</th>
                <td>{{ faktury.kontrahent }}</td>
            </tr>
            <tr>
                <th>Numer</th>
                <td>{{ faktury.numer }}</td>
            </tr>
            <tr>
                <th>Datawystawienia</th>
                <td>{% if faktury.dataWystawienia %}{{ faktury.dataWystawienia|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Kontrahentnrkonta</th>
                <td>{{ faktury.kontrahentNrKonta }}</td>
            </tr>
            <tr>
                <th>Kwotanetto</th>
                <td>{{ faktury.kwotaNetto }}</td>
            </tr>
            <tr>
                <th>Kwotabrutto</th>
                <td>{{ faktury.kwotaBrutto }}</td>
            </tr>
            <tr>
                <th>Kwotavat</th>
                <td>{{ faktury.kwotaVat }}</td>
            </tr>
            <tr>
                <th>Opis</th>
                <td>{{ faktury.opis }}</td>
            </tr>
            <tr>
                <th>Formaplatnosci</th>
                <td>{{ faktury.formaPlatnosci }}</td>
            </tr>
            <tr>
                <th>Plikskanfaktury</th>
                <td>{{ faktury.plikSkanFaktury }}</td>
            </tr>
            <tr>
                <th>Czyzaplacono</th>
                <td>{% if faktury.czyZaplacono %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('operacje_nieprzypisane') }}\">Operacje</a>
        </li>
        {#<li>#}
            {#<a href=\"{{ path('faktury_edit', { 'id': faktury.id }) }}\">Edycja</a>#}
        {#</li>#}
        {#<li>#}
            {#{{ form_start(delete_form) }}#}
                {#<input type=\"submit\" value=\"Usuń\">#}
            {#{{ form_end(delete_form) }}#}
        {#</li>#}
    </ul>
{% endblock %}
", "faktury/show.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\faktury\\show.html.twig");
    }
}
