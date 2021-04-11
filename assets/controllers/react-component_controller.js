import { Controller } from 'stimulus';
import ReactDOM from 'react-dom';
import React from 'react';
import HealthReact from "../js/react/srr/elements/health-react.element";

/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
export default class extends Controller {
    static values = {
        name: String
    }

    connect() {
        ReactDOM.render(
            <HealthReact name={this.nameValue} />,
            this.element
        )
    }
}
