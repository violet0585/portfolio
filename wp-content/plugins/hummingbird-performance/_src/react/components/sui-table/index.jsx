/**
 * External dependencies
 */
import React from 'react';
import classNames from 'classnames';

/**
 * Table component.
 *
 * @param {Object}  props         Component props.
 * @param {Object}  props.header  Table header rows.
 * @param {Object}  props.body    Table body rows.
 * @param {boolean} props.flushed Flushed layout or normal.
 * @return {JSX.Element}  Table component.
 * @class
 */
export default function Table( { header, body, flushed = false } ) {
	const headerItems = Object.values( header ).map( ( el, id ) => {
		return <th key={ id }>{ el }</th>;
	} );

	const bodyItems = Object.values( body ).map( ( el, id ) => {
		const row = Object.values( el ).map( ( td, i ) => {
			return <td key={ i } className={ classNames( { 'sui-table-item-title': 0 === i } ) } >{ td.content }</td>;
		} );

		return <tr key={ id }>{ row }</tr>;
	} );

	return (
		<table
			className={ classNames( 'sui-table', {
				'sui-table-flushed': flushed,
			} ) }
		>
			<thead>
				<tr>{ headerItems }</tr>
			</thead>
			<tbody>{ bodyItems }</tbody>
		</table>
	);
}
