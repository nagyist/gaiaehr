/**
 * GaiaEHR (Electronic Health Records)
 * Copyright (C) 2015 TRA NextGen, Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

Ext.define('Modules.reportcenter.Main', {
	extend: 'Modules.Module',

	requires:[
		'Modules.reportcenter.view.ReportCenter'
	],

	init: function(){
		var me = this;

        me.getController('Modules.reportcenter.controller.ReportCenter');
        me.nav = me.getController('Navigation');

		/**
		 * function to add navigation links
		 * @param parentId  (string)            navigation node parent ID,
		 * @param node      (object || array)   navigation node configuration properties
		 */
		me.addNavigationNodes('root', {
			text: _('report_center'),
			leaf: true,
			cls: 'file',
			iconCls: 'icoReport',
			id: 'Modules.reportcenter.view.ReportCenter'
		});

		me.callParent();
	}
}); 