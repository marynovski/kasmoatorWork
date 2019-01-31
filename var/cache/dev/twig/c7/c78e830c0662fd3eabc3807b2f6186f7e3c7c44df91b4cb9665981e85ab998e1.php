<?php

/* naszefirmy/show.html.twig */
class __TwigTemplate_d90d8a34d76212e0c645814dc925c74df6d8b761c7e2020c01059c7b785ba1c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "naszefirmy/show.html.twig", 1);
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
        $__internal_ba40ffd7777070c2b176d44d88cc79a0b1cd10224ccad64d25088d63a4ca5aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba40ffd7777070c2b176d44d88cc79a0b1cd10224ccad64d25088d63a4ca5aa6->enter($__internal_ba40ffd7777070c2b176d44d88cc79a0b1cd10224ccad64d25088d63a4ca5aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "naszefirmy/show.html.twig"));

        $__internal_cbc81118ae3f1025ab47ce4d900287828cb199732083c4fdaca4dd7188eff9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc81118ae3f1025ab47ce4d900287828cb199732083c4fdaca4dd7188eff9b1->enter($__internal_cbc81118ae3f1025ab47ce4d900287828cb199732083c4fdaca4dd7188eff9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "naszefirmy/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba40ffd7777070c2b176d44d88cc79a0b1cd10224ccad64d25088d63a4ca5aa6->leave($__internal_ba40ffd7777070c2b176d44d88cc79a0b1cd10224ccad64d25088d63a4ca5aa6_prof);

        
        $__internal_cbc81118ae3f1025ab47ce4d900287828cb199732083c4fdaca4dd7188eff9b1->leave($__internal_cbc81118ae3f1025ab47ce4d900287828cb199732083c4fdaca4dd7188eff9b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_442d69735300282df9ae06a09251223289a6e873ff479dd1cebe9b0e52e75d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442d69735300282df9ae06a09251223289a6e873ff479dd1cebe9b0e52e75d08->enter($__internal_442d69735300282df9ae06a09251223289a6e873ff479dd1cebe9b0e52e75d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00ab14263f78535a576f0b1d65eae179f5c01b2b69642087da9df90d7c912ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ab14263f78535a576f0b1d65eae179f5c01b2b69642087da9df90d7c912ddb->enter($__internal_00ab14263f78535a576f0b1d65eae179f5c01b2b69642087da9df90d7c912ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dane firmy</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["naszeFirmy"] ?? $this->getContext($context, "naszeFirmy")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nazwa</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["naszeFirmy"] ?? $this->getContext($context, "naszeFirmy")), "nazwa", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adres</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["naszeFirmy"] ?? $this->getContext($context, "naszeFirmy")), "adres", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Miasto</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["naszeFirmy"] ?? $this->getContext($context, "naszeFirmy")), "miasto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kodpocztowy</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["naszeFirmy"] ?? $this->getContext($context, "naszeFirmy")), "kodPocztowy", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nip</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["naszeFirmy"] ?? $this->getContext($context, "naszeFirmy")), "nip", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("naszefirmy_index");
        echo "\">Lista firm</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("naszefirmy_edit", array("id" => $this->getAttribute(($context["naszeFirmy"] ?? $this->getContext($context, "naszeFirmy")), "id", array()))), "html", null, true);
        echo "\">Edytuj</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Usuń\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_00ab14263f78535a576f0b1d65eae179f5c01b2b69642087da9df90d7c912ddb->leave($__internal_00ab14263f78535a576f0b1d65eae179f5c01b2b69642087da9df90d7c912ddb_prof);

        
        $__internal_442d69735300282df9ae06a09251223289a6e873ff479dd1cebe9b0e52e75d08->leave($__internal_442d69735300282df9ae06a09251223289a6e873ff479dd1cebe9b0e52e75d08_prof);

    }

    public function getTemplateName()
    {
        return "naszefirmy/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  114 => 43,  108 => 40,  102 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Dane firmy</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ naszeFirmy.id }}</td>
            </tr>
            <tr>
                <th>Nazwa</th>
                <td>{{ naszeFirmy.nazwa }}</td>
            </tr>
            <tr>
                <th>Adres</th>
                <td>{{ naszeFirmy.adres }}</td>
            </tr>
            <tr>
                <th>Miasto</th>
                <td>{{ naszeFirmy.miasto }}</td>
            </tr>
            <tr>
                <th>Kodpocztowy</th>
                <td>{{ naszeFirmy.kodPocztowy }}</td>
            </tr>
            <tr>
                <th>Nip</th>
                <td>{{ naszeFirmy.nip }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('naszefirmy_index') }}\">Lista firm</a>
        </li>
        <li>
            <a href=\"{{ path('naszefirmy_edit', { 'id': naszeFirmy.id }) }}\">Edytuj</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Usuń\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "naszefirmy/show.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\naszefirmy\\show.html.twig");
    }
}
